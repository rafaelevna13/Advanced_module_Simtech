CREATE TABLE IF NOT EXISTS cscart_departments (   
    department_id INT(11) unsigned NOT NULL auto_increment, 
    position INT(11) unsigned NOT NULL default '0', 
    status varchar(1) NOT NULL default 'A', 
    timestamp INT(11) unsigned NOT NULL default '0', 
    upd_timestamp INT (11) unsigned NOT NULL default '0', 
    admin_id INT(11) unsigned NOT NULL default '0', 
    KEY (admin_id),
    KEY (department_id),
    PRIMARY KEY (department_id, admin_id) 
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 
CREATE TABLE IF NOT EXISTS cscart_department_descriptions ( 
    department_id INT(11) unsigned NOT NULL default '0', 
    lang_code char(2) NOT NULL default '', 
    department varchar(255) NOT NULL default '', 
    description text null,
    PRIMARY KEY (department_id, lang_code) 
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 
CREATE TABLE IF NOT EXISTS cscart_department_links ( 
    department_id INT(11) unsigned NOT NULL default '0',   
    user_id INT(11) unsigned NOT NULL,
    KEY (user_id), 
    KEY (department_id)
) ENGINE = InnoDB  DEFAULT CHARSET=utf8  
