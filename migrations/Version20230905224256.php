<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230905224256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add Pipe table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('
            CREATE TABLE IF NOT EXISTS pipe
                (
                    id SERIAL PRIMARY KEY,
                    name VARCHAR(255) NOT NULL,
                    material VARCHAR(255) DEFAULT NULL,
                    minimum_yield_strength FLOAT DEFAULT NULL,
                    tensile_strength FLOAT DEFAULT NULL,
                    outer_diameter FLOAT DEFAULT NULL,
                    nominal_wall_thickness FLOAT DEFAULT NULL,
                    corrosion_allowance FLOAT DEFAULT NULL
                );
        ');
    }

    public function down(Schema $schema): void
    {
    }
}