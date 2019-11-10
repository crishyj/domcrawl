<head>
    <title>
        Test
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .btnOpenLeadR{
            display:none;
        }

        .reportOnLeadCSS{
            display: -webkit-box;
            margin-bottom: 50px;
        }
        textarea, .btnUpdateDesc{
            display:none;
        }
        
    
    </style>
</head>
<body class = "container">
    <center><h2>Test Result</h2></center>
    <br>
    <?php

        require __DIR__.'/vendor/autoload.php';
        use Symfony\Component\DomCrawler\Crawler;
        use Goutte\Client;
        $client = new Client();
        $crawler = $client->request('GET', 'http://afteru-ppc.co.il/login.aspx?ReturnUrl=%2fdefault.aspx');
        $form = $crawler->selectButton('btnSend')->form();
        $form['uName'] = 'Avihov';
        $form['uPass'] = 'Aviaa12345';
        $crawler = $client->submit($form);
        $crawler = $client->request('GET', 'http://afteru-ppc.co.il/mobile/');
        $nodeValues = $crawler->filter('table')->each(function (Crawler $node, $i) {
            echo $node->html();
        });
        echo "</tbody>";
    ?>
    <script> 
      
    </script>
</body>
