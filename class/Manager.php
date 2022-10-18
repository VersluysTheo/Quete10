<?php
class Manager
{

    private $_db;
    protected $table = 'champion';

    public function __construct()
    {
        $this->_db = Database::db();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $query = $this->_db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function findOne(string $name)
    {
        $sql = "SELECT * FROM champion WHERE $this->table = :param1";
        $query = $this->_db->prepare($sql);
        $query->bindParam(':param1', $id, PDO::PARAM_INT);
        $query->bindParam(':param2', $name, PDO::PARAM_STR);
        $query->bindParam(':param3', $description, PDO::PARAM_STR);
        $query->bindParam(':param4', $age, PDO::PARAM_INT);
        $query->bindParam(':param5', $size, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }


    public function createTable()
    {
        $sql = "CREATE TABLE champion( 
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            champion VARCHAR(64) NOT NULL, 
            description VARCHAR(200000) NOT NULL, 
            age INT,
            size FLOAT
            ) 
            ENGINE=InnoDB;";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }

    public function deleteTable()
    {
        $sql = "DROP TABLE champion";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }

    public function creerlesDonnees()
    {
        $sql = "INSERT INTO `champion` (`id`, `champion`, `description`, `age`, `size`) VALUES
        (1, 'Dylan', 'Dylan 25 ans Boulanger mais allergique à la farine ( ahah la merde ).\r\nIl est BFF avec la calvitie depuis sa naissance.\r\nIl est Batman entre minuit et minuit 1\r\nIl ne pense pas que l\'alcool soit de l\'eau mais la Monster si.\r\nIl a toujours rêver de participer a une bataille médiévale car il adore la période du 12ème siècle et qu\'il est sadomasochiste.\r\n', 25, 1.85),
        (2, 'Miana', 'Miana 22 ans, pense que le second degré est un fruit comestibles des îles.\r\nElle a toujours rêver d\'avoir des amis même si il est insupportable 24h/24.\r\nElle est capable de te parler de sa vie sentimentale de son enfance alors que tu lui a juste dit bonjour.\r\nElle est accro à la cocaïne et à la téléréalité ( d\'où le pète au casque ).\r\nElle a déja fraudé Pole Emploi.', 22, 1.12),
        (3, 'Souad', 'Souad 21 ans, fan du PSG car cette équipe est composé uniquement de ses Frères ( pas des français quoi ).\r\nElle a déjà rêver de manger une porte en sucre parce que c\'est fun .\r\nElle a déjà trébuché sur du sol plat car elle n\'a aucun sens de l\'équilibre.\r\nElle est le sosie officiel de Badabouin.\r\nElle n\'aime pas les Blancs.\r\n', 21, 1.6),
        (4, 'Theo', 'Theo 23 ans, n\'est jamais sorti de chez lui et ne sais même pas qui est son voisin.\r\nIl a le record de la personne la plus gênante.\r\nIl pense que l\'eau chaude a été inventé par les robinets.\r\nIl cosplay en personnage féminin a chaque convention.\r\nIl a déjà dépensé le PIB du Kenya en 2 minutes.\r\nIl est le sosie officiel de passe partout.', 23, 1.71),
        (5, 'Yann', 'Yann 19ans, confond toujours Pascal Obispo et Calogero.\r\nIl pensait que les LGBT était une entreprise de tapis roulant.\r\nIl va à la salle 8jours /7.\r\nIl possède le plus grand nombre de conquêtes avant sa puberté .\r\nIl est transsexuel.\r\nIl est ami avec Fidel Castro.', 19, 1.89),
        (6, 'Florent', 'Florent 24ans , n\'a pas ressenti d\'émotions depuis 2002.\r\nSon meilleur ami est un Rubix cube\r\nIl est champion d\'échec catégorie + 95ans\r\nIl fait des drifts sur l\'A6 chaque mardi\r\nIl possède un singe de compagnie', 24, 1.82),
        (7, 'Seb', 'Seb 49 ans, retraité de son ancien métier : croque-mort\r\nIl s\'est déjà cassé 4 côtes juste en se réveillant le matin.\r\nIl fait souvent des soirées bridges avec ses amis le mardi a Tournan-en-Brie.\r\nIl est originaire de la Yougoslavie mais habite en Norvège.\r\nIl est fan d\'Indila\r\n', 49, 1.8),
        (8, 'Thomas', 'Thomas 33ans , retraité de son ancien métier : Pro gamer.\r\nIl est capable de citer 2500 chiffres après la virgule de PI.\r\nIl a déjà été au Buveur de Pepsi excessif anonyme.\r\nIl regarde des documentaire animalier sur ARTE le soir quand il n\'a rien à faire \r\nIl a déposé 4 brevets et obtenu un prix Nobel.', 33, 1.88),
        (9, 'Botteman', 'C\'est une Botte IRL\r\nIl est souvent mouillé par temps de pluie. \r\nIl n\'aime pas quand on le prend pour une chaussure.\r\nIl trouve que les enfants ont une odeur corporel moins prononcée.\r\nIl a un Crush pour escarpin.', 22, 1),
        (10, 'Cochonou', 'Il est Gouteux par temps de fête de fin des années.\r\nIl est très apprécies par les Picards pour son épaisseur et ses valeurs campagnarde. accompagné d\'un bon vin de région.\r\nIl est long mais ce n\'est pas un film d\'auteur.\r\nIl est dur mais ce n\'est pas un concours pour rentrer en école d\'ingénieur.\r\nIl est pote avec DD du Tiercé.', 3, 0.5),
        (11, 'Schtroumpf', 'Il travaille dans un village pour un dictateur qui les remercie sans les payer.\r\nIl est exploité alors qu\'il n\'est pas a maturité.\r\nIl ne peut pas se reproduire car il n\'existe qu\'une seule femelle.\r\nIl n\'existe pas car c\'est un personnage inventé de toute pièce et que ce serait dingue.', 10, 0.2),
        (12, 'qvzesiluh ', 'C\'est un spasme de clavier d\'ordinateur.\r\nCe n\'est pas une image ou un chose réelle.\r\nCe n\'est pas un concept ou de l\'art abstrait.\r\nIl ne possède pas de religion ni de Visa ( ni de RIB ).\r\nIl est très pote avec fzreslkvn avec qui il boit des coups tout les jeudis.', 61, 1.64),
        (13, 'Fidel Gastro', 'Il est partisan et fier combattant pour l\'armée Costa-Ricaine.\r\nIl n\'a pas pu faire la guerre a cause du tacos qu\'il l\'a bouffé la veille.\r\nIl a du coup perdu cette dernière et s\'est reclus en Ouzbékistan afin d\'élevé des Lamas.\r\nIl aime faire des Paris sportifs.', 81, 1.9),
        (14, 'Mogus', 'Il aime se balader dans les conduits d\'aérations.\r\nIl est fan de Phillipe Etchebest et sa manière de manier les Couteaux.\r\nIl a pour meilleur ami un robot\r\nIl a travaillé dans le même bâtiment pendant plus de 10 ans\r\nIl possède un compte OnlyFans', 46, 0.6),
        (15, 'Grimbard', 'Il a fait un conservatoire à l\'âge de 6ans et joue de la cornemuse depuis qu\'il est petit.\r\nSon père est parti chercher du lait et a disparu a ce moment là.\r\nIl n\'aime pas quand on franchi le 4ème mur et le film le cinquième élément.\r\nIl a déjà pleurer devant la soupe au choux.', 27, 1.41),
        (16, 'Sere', 'Il collectionne les Œsophages.\r\nIl boit du Coca quand il est triste.\r\nIl a développé du Diabète en regardant Charlie et la Chocolaterie.\r\nIl ne mange pas de poisson les 14 du mois a cause de son signe astrologique.\r\nIl est fan de Johnny Hallyday.', 31, 1.7),
        (17, 'Vintho', 'Il est Alcoolique Précoce\r\nIl n\'est pas ami avec Jean Réno et Gerard Depardieu.\r\nIl aime regardé la Panthère Rose et Sex and the City.\r\nIl n\'est pas non plus ami avec Christophe Beaugrand et Jamel Debbouze.\r\nIl suce son pouce quand il est stressé.', 11, 1.11),
        (18, 'Rennar', 'C\'est un Dragon Millénaire de la Région de Neocity.\r\nElle aime beaucoup le jeu vidéo Skyrim.\r\nElle a lu la biographie entière d\'Azimoov en étant plus jeune. \r\nElle est fille de Forgeron.\r\nElle déclenche l\'alarme incendie de sa maison 4 fois/jour.', 250, 15.04),
        (19, 'Miso', 'Il a une phobie de la soupe.\r\nIl regarde souvent \"Question pour un champion en mangeant\".\r\nIl s\'est tapé sa meilleure cuite le jour de la coupe du monde 1998.\r\nIl possède le record d\'oeufs écrasés à la minute.\r\nIl a écrit 3 livres mal notés.', 19, 1.59),
        (20, 'Tanea', 'Il est responsable comptable pour la société Brico-éco.\r\nIl a déjà rencontré Camélia Jordana au Marché de Dijon.\r\nIl pense que Bruno Mars devrait se renommer Brunovembre le mois Prochain .\r\nIl est capable de faire le poirier sur un élastique au bord d\'un canyon ou il pourrait chuter a tout moment. \r\nIl est mythomane de nature.', 38, 1.81);";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }

    public function lirelaTable()
    {
        $sql = "SELECT * FROM `champion`";
        $query = $this->_db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function ctrlaltSupp()
    {
        $sql = "DELETE FROM `champion`";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }

    public function orderbyDesc()
    {
        $sql = "SELECT * FROM `champion` ORDER BY `age` DESC";
        $query = $this->_db->prepare($sql);
        $query->execute();
        $orderby = $query->fetchAll();
        return $orderby;
    }

    public function deleteRandom()
    {
        $sql = 'DELETE FROM champion WHERE `id` = :param1';
        $query = $this->_db->prepare($sql);
        $query->bindParam(':param1', $id, PDO::PARAM_INT);
        $query->execute();
    }

    public function updateHulk()
    {
        $sql = "SELECT * FROM `champion` Limit 1 OFFSET 4";
        $query = $this->_db->prepare($sql);
        $query->execute();
        $hulk = $query->fetch();
        return $hulk;
    }

    public function hulkChanger($hulk)
    {
        $sql = "UPDATE `champion` SET `champion` = 'Hulk', `description` = 'Il ne faut pas le provoquer en 1vs1 sous risque de mort certaine.Il a refusé de faire de la publicité pour Géant Vert.Il aime les balades en fôret.', `age` = 50, `size` = '2.4' WHERE id = :param1";
        $query = $this->_db->prepare($sql);
        $query->bindParam(':param1', $hulk, PDO::PARAM_INT);
        $query->execute();
    }

    public function ctrlaltSupprand($list)
    {
        $prep = count($list);
        // var_dump($prep);
        $random = rand(0, $prep - 1);
        // var_dump($random);
        $sql = "DELETE FROM `champion` WHERE `id` = :param1";
        $query = $this->_db->prepare($sql);
        $query->bindParam(':param1', $random, PDO::PARAM_INT);
        $query->execute();
    }

    public function lireRandom($list)
    {
        $prep = count($list);
        $random = rand(0, $prep - 1);
        $sql = "SELECT * FROM `champion` WHERE `id` = :param1";
        $query = $this->_db->prepare($sql);
        $query->bindParam(':param1', $random, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }
}
