<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220605072257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lle_pdf_model (id BIGINT AUTO_INCREMENT NOT NULL, code VARCHAR(50) NOT NULL, path VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, datamodel VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, updated_at DATETIME DEFAULT NULL, check_file TINYINT(1) DEFAULT NULL, INDEX idx_code (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE lle_pdf_model');
    }
}
