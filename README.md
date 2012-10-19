kohana-mikrotik
===============

Mikrotik module for Kohana 3.2

This module is a fork from [Mikrotik Api Codeigniter Spark](http://getsparks.org/packages/mikrotik_api/show) with a few tweaks to work with Kohana.

## Installation

Clone the repo to your modules folder
	
    git clone https://github.com/ricardocasares/kohana-mikrotik.git modules/kohana-mikrotik
or manually download and extract to your modules folder

Create a new config/mikrotik.php in your application folder, or edit the one in kohana-mikrotik/config with your mikrotik access details.

Add the module to your application's bootstrap.php file
    
    Kohana::modules(array(
        'kohana-mikrotik' => MODPATH.'kohana-mikrotik'
    ));

## Usage

From your application:

    $mk = new Mikrotik();
    $address = $mk->ip->address->get_all_address();
    var_dump($address);

Will output something like

    Array
    (
        [0] => Array
            (
                [.id] => *2
                [address] => 192.168.1.1/24
                [network] => 192.168.1.0
                [interface] => ether1
                [actual-interface] => ether1
                [invalid] => false
                [dynamic] => false
                [disabled] => false
            )

    )

Make sure the Mikrotik IP Service API is enabled