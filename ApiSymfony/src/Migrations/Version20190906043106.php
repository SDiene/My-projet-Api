<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190906043106 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE retrait_envoie (retrait_id INT NOT NULL, envoie_id INT NOT NULL, INDEX IDX_810509FF7EF8457A (retrait_id), INDEX IDX_810509FF425C347D (envoie_id), PRIMARY KEY(retrait_id, envoie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE retrait_envoie ADD CONSTRAINT FK_810509FF7EF8457A FOREIGN KEY (retrait_id) REFERENCES retrait (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE retrait_envoie ADD CONSTRAINT FK_810509FF425C347D FOREIGN KEY (envoie_id) REFERENCES envoie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE retrait_envoie');
    }
}
