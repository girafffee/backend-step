CREATE TABLE `c1backend3`.`user`
(
    `id`       INT          NOT NULL AUTO_INCREMENT,
    `email`    VARCHAR(255) NOT NULL,
    `pswd`     VARCHAR(255) NOT NULL,
    `settings` TEXT         NULL,
    PRIMARY KEY (`id`),
    UNIQUE (`email`)
)
    ENGINE = InnoDB;