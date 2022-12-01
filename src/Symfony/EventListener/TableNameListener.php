<?php

namespace Jimmeak\Symfony\EventListener;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Symfony\Component\String\UnicodeString;
use function Symfony\Component\String\u;

class TableNameListener
{
    public function loadClassMetadata(LoadClassMetadataEventArgs $eventArgs): void
    {
        $classMetadata = $eventArgs->getClassMetadata();

        if (!$classMetadata->isInheritanceTypeSingleTable() || $classMetadata->getName() === $classMetadata->rootEntityName) {
            $classMetadata->setPrimaryTable([
                'name' => $this->getName($classMetadata->getName(), $classMetadata->getTableName()),
            ]);
        }

        foreach ($classMetadata->getAssociationMappings() as $fieldName => $mapping) {
            if ($mapping['type'] == ClassMetadataInfo::MANY_TO_MANY && $mapping['isOwningSide']) {
                $mappedTableName = $mapping['joinTable']['name'];
                $classMetadata->associationMappings[$fieldName]['joinTable']['name'] = $this->getName($mapping['targetEntity'], $mappedTableName);
            }
        }
    }

    protected function getName(string $className, string $tableName): string
    {
        $nameSpaces = u($className)->split('\\', 3);
        $names = $nameSpaces[2]
            ?? throw new \LogicException('Wrongly added Entity (Directory must be src/Entity).');
        $parts = $names->replace('/', '__')->split('\\');
        $parts = array_map(fn (UnicodeString $string) => $string->snake(), $parts);
        return u('___')->join($parts);
    }
}
