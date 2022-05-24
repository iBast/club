<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220524161344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lle_credential_credential (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(255) NOT NULL, libelle VARCHAR(255) DEFAULT NULL, rubrique VARCHAR(255) NOT NULL, tri INT NOT NULL, visible TINYINT(1) DEFAULT 1, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lle_credential_group (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_role TINYINT(1) NOT NULL, actif TINYINT(1) NOT NULL, required_role VARCHAR(255) NOT NULL, tri INT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lle_credential_group_credential (id INT AUTO_INCREMENT NOT NULL, credential_id INT NOT NULL, groupe_id INT NOT NULL, allowed TINYINT(1) NOT NULL, INDEX IDX_46B0447A2558A7A5 (credential_id), INDEX IDX_46B0447A7A45358C (groupe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lle_credential_group_credential ADD CONSTRAINT FK_46B0447A2558A7A5 FOREIGN KEY (credential_id) REFERENCES lle_credential_credential (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lle_credential_group_credential ADD CONSTRAINT FK_46B0447A7A45358C FOREIGN KEY (groupe_id) REFERENCES lle_credential_group (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lle_credential_group_credential DROP FOREIGN KEY FK_46B0447A2558A7A5');
        $this->addSql('ALTER TABLE lle_credential_group_credential DROP FOREIGN KEY FK_46B0447A7A45358C');
        $this->addSql('DROP TABLE lle_credential_credential');
        $this->addSql('DROP TABLE lle_credential_group');
        $this->addSql('DROP TABLE lle_credential_group_credential');
    }
}
