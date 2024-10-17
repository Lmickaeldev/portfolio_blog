<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241017115636 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE likeis_user DROP FOREIGN KEY FK_DF8A0C1936DA5D14');
        $this->addSql('ALTER TABLE likeis_user DROP FOREIGN KEY FK_DF8A0C19A76ED395');
        $this->addSql('ALTER TABLE likeis_article DROP FOREIGN KEY FK_713AA5D136DA5D14');
        $this->addSql('ALTER TABLE likeis_article DROP FOREIGN KEY FK_713AA5D17294869C');
        $this->addSql('DROP TABLE likeis_user');
        $this->addSql('DROP TABLE likeis_article');
        $this->addSql('DROP TABLE likeis');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE likeis_user (likeis_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_DF8A0C1936DA5D14 (likeis_id), INDEX IDX_DF8A0C19A76ED395 (user_id), PRIMARY KEY(likeis_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE likeis_article (likeis_id INT NOT NULL, article_id INT NOT NULL, INDEX IDX_713AA5D17294869C (article_id), INDEX IDX_713AA5D136DA5D14 (likeis_id), PRIMARY KEY(likeis_id, article_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE likeis (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE likeis_user ADD CONSTRAINT FK_DF8A0C1936DA5D14 FOREIGN KEY (likeis_id) REFERENCES likeis (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE likeis_user ADD CONSTRAINT FK_DF8A0C19A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE likeis_article ADD CONSTRAINT FK_713AA5D136DA5D14 FOREIGN KEY (likeis_id) REFERENCES likeis (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE likeis_article ADD CONSTRAINT FK_713AA5D17294869C FOREIGN KEY (article_id) REFERENCES article (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
