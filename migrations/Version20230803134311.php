<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230803134311 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actor DROP name, DROP surname, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE actor ADD CONSTRAINT FK_447556F9BF396750 FOREIGN KEY (id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE director CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE director ADD CONSTRAINT FK_1E90D3F0BF396750 FOREIGN KEY (id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person ADD name VARCHAR(255) NOT NULL, ADD surname VARCHAR(255) NOT NULL, ADD discr VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actor DROP FOREIGN KEY FK_447556F9BF396750');
        $this->addSql('ALTER TABLE actor ADD name VARCHAR(255) NOT NULL, ADD surname VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE director DROP FOREIGN KEY FK_1E90D3F0BF396750');
        $this->addSql('ALTER TABLE director CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE person DROP name, DROP surname, DROP discr');
    }
}
