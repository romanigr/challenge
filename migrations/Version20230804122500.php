<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230804122500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE refresh_tokens (id INT AUTO_INCREMENT NOT NULL, refresh_token VARCHAR(128) NOT NULL, username VARCHAR(255) NOT NULL, valid DATETIME NOT NULL, UNIQUE INDEX UNIQ_9BACE7E1C74F2195 (refresh_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE person_streamming DROP FOREIGN KEY FK_B168EDAB8F93B6FC');
        $this->addSql('ALTER TABLE person_streamming DROP FOREIGN KEY FK_B168EDAB217BBB47');
        $this->addSql('DROP INDEX idx_b168edab217bbb47 ON person_streamming');
        $this->addSql('CREATE INDEX IDX_5613502E217BBB47 ON person_streamming (person_id)');
        $this->addSql('DROP INDEX idx_b168edab8f93b6fc ON person_streamming');
        $this->addSql('CREATE INDEX IDX_5613502E621981CB ON person_streamming (streamming_id)');
        $this->addSql('ALTER TABLE person_streamming ADD CONSTRAINT FK_B168EDAB8F93B6FC FOREIGN KEY (streamming_id) REFERENCES streamming (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person_streamming ADD CONSTRAINT FK_B168EDAB217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE refresh_tokens');
        $this->addSql('ALTER TABLE person_streamming DROP FOREIGN KEY FK_5613502E217BBB47');
        $this->addSql('ALTER TABLE person_streamming DROP FOREIGN KEY FK_5613502E621981CB');
        $this->addSql('DROP INDEX idx_5613502e217bbb47 ON person_streamming');
        $this->addSql('CREATE INDEX IDX_B168EDAB217BBB47 ON person_streamming (person_id)');
        $this->addSql('DROP INDEX idx_5613502e621981cb ON person_streamming');
        $this->addSql('CREATE INDEX IDX_B168EDAB8F93B6FC ON person_streamming (streamming_id)');
        $this->addSql('ALTER TABLE person_streamming ADD CONSTRAINT FK_5613502E217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person_streamming ADD CONSTRAINT FK_5613502E621981CB FOREIGN KEY (streamming_id) REFERENCES streamming (id) ON DELETE CASCADE');
    }
}
