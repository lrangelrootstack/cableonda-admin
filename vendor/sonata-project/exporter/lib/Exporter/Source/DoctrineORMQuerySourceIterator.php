<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exporter\Source;

use Exporter\Exception\InvalidMethodCallException;
use Doctrine\ORM\Query;
use Exporter\Source\SourceIteratorInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyPath;
use Symfony\Component\PropertyAccess\Exception\UnexpectedTypeException;

class DoctrineORMQuerySourceIterator implements SourceIteratorInterface
{
    /**
     * @var \Doctrine\ORM\Query
     */
    protected $query;

    /**
     * @var \Doctrine\ORM\Internal\Hydration\IterableResult
     */
    protected $iterator;

    protected $propertyPaths;

    /**
     * @var PropertyAccess
     */
    protected $propertyAccessor;

    /**
     * @var string default DateTime format
     */
    protected $dateTimeFormat;

    /**
     * @param \Doctrine\ORM\Query $query          The Doctrine Query
     * @param array               $fields         Fields to export
     * @param string              $dateTimeFormat
     */
    public function __construct(Query $query, array $fields, $dateTimeFormat = 'd/m/Y - h:m:s')
    {
        $this->query = clone $query;
        $this->query->setParameters($query->getParameters());
        foreach ($query->getHints() as $name => $value) {
            $this->query->setHint($name, $value);
        }

        // Note : will be deprecated in Symfony 3.0, conserved for 2.2 compatibility
        // Use createPropertyAccessor() for 3.0
        // @see Symfony\Component\PropertyAccess\PropertyAccess
        $this->propertyAccessor = PropertyAccess::getPropertyAccessor();

        $this->propertyPaths = array();
        foreach ($fields as $name => $field) {
            if (is_string($name) && is_string($field)) {
                $this->propertyPaths[$name] = new PropertyPath($field);
            } else {
                $this->propertyPaths[$field] = new PropertyPath($field);
            }
        }
        $this->dateTimeFormat = $dateTimeFormat;
    }

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        $current = $this->iterator->current();

        $data = array();

        foreach ($this->propertyPaths as $name => $propertyPath) {
            try {
                $data[$name] = $this->getValue($this->propertyAccessor->getValue($current[0], $propertyPath));
            } catch (UnexpectedTypeException $e) {
                //non existent object in path will be ignored
                $data[$name] = null;
            }
        }

        $this->query->getEntityManager()->getUnitOfWork()->detach($current[0]);

        return $data;
    }

    /**
     * @param $value
     *
     * @return null|string
     */
    protected function getValue($value)
    {
        if (is_array($value) or $value instanceof \Traversable) {
            $value = null;
        } elseif ($value instanceof \DateTime) {
            $value = $value->format($this->dateTimeFormat);
        } elseif (is_object($value)) {
            $value = (string) $value;
        }

        return $value;
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        $this->iterator->next();
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        return $this->iterator->key();
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return $this->iterator->valid();
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        if ($this->iterator) {
            throw new InvalidMethodCallException('Cannot rewind a Doctrine\ORM\Query');
        }

        $this->iterator = $this->query->iterate();
        $this->iterator->rewind();
    }

    /**
     * @param string $dateTimeFormat
     */
    public function setDateTimeFormat($dateTimeFormat)
    {
        $this->dateTimeFormat = $dateTimeFormat;
    }

    /**
     * @return string
     */
    public function getDateTimeFormat()
    {
        return $this->dateTimeFormat;
    }
}
