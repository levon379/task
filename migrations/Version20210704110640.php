<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210704110640 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE department_admin (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE department_user ADD CONSTRAINT FK_2F89B11CA76ED395 FOREIGN KEY (user_id) REFERENCES fos_user__user (id)');
        $this->addSql('ALTER TABLE department_user ADD CONSTRAINT FK_2F89B11CAE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('CREATE INDEX IDX_2F89B11CA76ED395 ON department_user (user_id)');
        $this->addSql('CREATE INDEX IDX_2F89B11CAE80F5DF ON department_user (department_id)');
        $this->addSql('ALTER TABLE letter CHANGE user_id user_id INT DEFAULT NULL, CHANGE department_id department_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE letter ADD CONSTRAINT FK_8E02EE0AA76ED395 FOREIGN KEY (user_id) REFERENCES fos_user__user (id)');
        $this->addSql('ALTER TABLE letter ADD CONSTRAINT FK_8E02EE0AAE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('CREATE INDEX IDX_8E02EE0AA76ED395 ON letter (user_id)');
        $this->addSql('CREATE INDEX IDX_8E02EE0AAE80F5DF ON letter (department_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE department_admin');
        $this->addSql('ALTER TABLE department_user DROP FOREIGN KEY FK_2F89B11CA76ED395');
        $this->addSql('ALTER TABLE department_user DROP FOREIGN KEY FK_2F89B11CAE80F5DF');
        $this->addSql('DROP INDEX IDX_2F89B11CA76ED395 ON department_user');
        $this->addSql('DROP INDEX IDX_2F89B11CAE80F5DF ON department_user');
        $this->addSql('ALTER TABLE letter DROP FOREIGN KEY FK_8E02EE0AA76ED395');
        $this->addSql('ALTER TABLE letter DROP FOREIGN KEY FK_8E02EE0AAE80F5DF');
        $this->addSql('DROP INDEX IDX_8E02EE0AA76ED395 ON letter');
        $this->addSql('DROP INDEX IDX_8E02EE0AAE80F5DF ON letter');
        $this->addSql('ALTER TABLE letter CHANGE user_id user_id INT NOT NULL, CHANGE department_id department_id INT NOT NULL');
    }
}
