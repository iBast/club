<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220605140533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lle_hermes_email_error (id INT AUTO_INCREMENT NOT NULL, nb_error INT NOT NULL, date_error DATETIME NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lle_hermes_error (id INT AUTO_INCREMENT NOT NULL, email_error_id INT NOT NULL, date DATETIME NOT NULL, subject VARCHAR(1024) NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_20767CE08806979E (email_error_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lle_hermes_mail (id INT AUTO_INCREMENT NOT NULL, template_id INT DEFAULT NULL, data JSON NOT NULL, status VARCHAR(255) NOT NULL, total_to_send INT NOT NULL, total_sended INT NOT NULL, subject VARCHAR(1024) NOT NULL, mjml LONGTEXT DEFAULT NULL, sending_date DATETIME DEFAULT NULL, text LONGTEXT DEFAULT NULL, html LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, total_unsubscribed INT NOT NULL, total_error INT NOT NULL, attachement JSON NOT NULL, total_opened INT NOT NULL, INDEX IDX_FD788CC75DA0FB8 (template_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lle_hermes_recipient (id INT AUTO_INCREMENT NOT NULL, mail_id INT DEFAULT NULL, cc_mail_id INT DEFAULT NULL, to_name VARCHAR(255) DEFAULT NULL, to_email VARCHAR(255) NOT NULL, data JSON NOT NULL, status VARCHAR(255) NOT NULL, nb_retry INT NOT NULL, open_date DATETIME DEFAULT NULL, INDEX IDX_9F10836BC8776F01 (mail_id), INDEX IDX_9F10836B65A93B71 (cc_mail_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lle_hermes_template (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, subject VARCHAR(1024) NOT NULL, sender_name VARCHAR(255) DEFAULT NULL, sender_email VARCHAR(255) NOT NULL, mjml LONGTEXT DEFAULT NULL, text LONGTEXT DEFAULT NULL, code VARCHAR(255) NOT NULL, html LONGTEXT DEFAULT NULL, unsubscriptions TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lle_hermes_unsubscribe_email (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, unsubscribe_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lle_pdf_model (id BIGINT AUTO_INCREMENT NOT NULL, code VARCHAR(50) NOT NULL, path VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, datamodel VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, updated_at DATETIME DEFAULT NULL, check_file TINYINT(1) DEFAULT NULL, INDEX idx_code (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lle_hermes_error ADD CONSTRAINT FK_20767CE08806979E FOREIGN KEY (email_error_id) REFERENCES lle_hermes_email_error (id)');
        $this->addSql('ALTER TABLE lle_hermes_mail ADD CONSTRAINT FK_FD788CC75DA0FB8 FOREIGN KEY (template_id) REFERENCES lle_hermes_template (id)');
        $this->addSql('ALTER TABLE lle_hermes_recipient ADD CONSTRAINT FK_9F10836BC8776F01 FOREIGN KEY (mail_id) REFERENCES lle_hermes_mail (id)');
        $this->addSql('ALTER TABLE lle_hermes_recipient ADD CONSTRAINT FK_9F10836B65A93B71 FOREIGN KEY (cc_mail_id) REFERENCES lle_hermes_mail (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lle_hermes_error DROP FOREIGN KEY FK_20767CE08806979E');
        $this->addSql('ALTER TABLE lle_hermes_recipient DROP FOREIGN KEY FK_9F10836BC8776F01');
        $this->addSql('ALTER TABLE lle_hermes_recipient DROP FOREIGN KEY FK_9F10836B65A93B71');
        $this->addSql('ALTER TABLE lle_hermes_mail DROP FOREIGN KEY FK_FD788CC75DA0FB8');
        $this->addSql('DROP TABLE lle_hermes_email_error');
        $this->addSql('DROP TABLE lle_hermes_error');
        $this->addSql('DROP TABLE lle_hermes_mail');
        $this->addSql('DROP TABLE lle_hermes_recipient');
        $this->addSql('DROP TABLE lle_hermes_template');
        $this->addSql('DROP TABLE lle_hermes_unsubscribe_email');
        $this->addSql('DROP TABLE lle_pdf_model');
    }
}
