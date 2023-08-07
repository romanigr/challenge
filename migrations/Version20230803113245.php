<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230803113245 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE episode (id INT AUTO_INCREMENT NOT NULL, season_id INT DEFAULT NULL, INDEX IDX_DDAA1CDA4EC001D1 (season_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person_movie (person_id INT NOT NULL, movie_id INT NOT NULL, INDEX IDX_B168EDAB217BBB47 (person_id), INDEX IDX_B168EDAB8F93B6FC (movie_id), PRIMARY KEY(person_id, movie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE season (id INT AUTO_INCREMENT NOT NULL, tvshow_id INT DEFAULT NULL, INDEX IDX_F0E45BA96CD43D7A (tvshow_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE episode ADD CONSTRAINT FK_DDAA1CDA4EC001D1 FOREIGN KEY (season_id) REFERENCES season (id)');
        $this->addSql('ALTER TABLE person_movie ADD CONSTRAINT FK_B168EDAB217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person_movie ADD CONSTRAINT FK_B168EDAB8F93B6FC FOREIGN KEY (movie_id) REFERENCES streamming (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE season ADD CONSTRAINT FK_F0E45BA96CD43D7A FOREIGN KEY (tvshow_id) REFERENCES streamming (id)');
        $this->addSql('ALTER TABLE streamming ADD director_id INT DEFAULT NULL, DROP season, DROP episode');
        $this->addSql('ALTER TABLE streamming ADD CONSTRAINT FK_60A8333B899FB366 FOREIGN KEY (director_id) REFERENCES director (id)');
        $this->addSql('CREATE INDEX IDX_60A8333B899FB366 ON streamming (director_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE episode DROP FOREIGN KEY FK_DDAA1CDA4EC001D1');
        $this->addSql('ALTER TABLE person_movie DROP FOREIGN KEY FK_B168EDAB217BBB47');
        $this->addSql('ALTER TABLE person_movie DROP FOREIGN KEY FK_B168EDAB8F93B6FC');
        $this->addSql('ALTER TABLE season DROP FOREIGN KEY FK_F0E45BA96CD43D7A');
        $this->addSql('DROP TABLE episode');
        $this->addSql('DROP TABLE person_movie');
        $this->addSql('DROP TABLE season');
        $this->addSql('ALTER TABLE streamming DROP FOREIGN KEY FK_60A8333B899FB366');
        $this->addSql('DROP INDEX IDX_60A8333B899FB366 ON streamming');
        $this->addSql('ALTER TABLE streamming ADD episode INT DEFAULT NULL, CHANGE director_id season INT DEFAULT NULL');
    }
}
