<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BancosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        
        DB::table('bancos')->delete();
        
        DB::table('bancos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'banco' => '001 - BANCO DO BRASIL S/A',
            ),
            1 => 
            array (
                'id' => 2,
                'banco' => '002 - BANCO CENTRAL DO BRASIL',
            ),
            2 => 
            array (
                'id' => 3,
                'banco' => '003 - BANCO DA AMAZONIA S.A',
            ),
            3 => 
            array (
                'id' => 4,
                'banco' => '004 - BANCO DO NORDESTE DO BRASIL S.A',
            ),
            4 => 
            array (
                'id' => 7,
                'banco' => '007 - BANCO NAC DESENV. ECO. SOCIAL S.A',
            ),
            5 => 
            array (
                'id' => 8,
                'banco' => '008 - BANCO MERIDIONAL DO BRASIL',
            ),
            6 => 
            array (
                'id' => 20,
                'banco' => '020 - BANCO DO ESTADO DE ALAGOAS S.A',
            ),
            7 => 
            array (
                'id' => 21,
                'banco' => '021 - BANCO DO ESTADO DO ESPIRITO SANTO S.A',
            ),
            8 => 
            array (
                'id' => 22,
                'banco' => '022 - BANCO DE CREDITO REAL DE MINAS GERAIS SA',
            ),
            9 => 
            array (
                'id' => 24,
                'banco' => '024 - BANCO DO ESTADO DE PERNAMBUCO',
            ),
            10 => 
            array (
                'id' => 25,
                'banco' => '025 - BANCO ALFA S/A',
            ),
            11 => 
            array (
                'id' => 26,
                'banco' => '026 - BANCO DO ESTADO DO ACRE S.A',
            ),
            12 => 
            array (
                'id' => 27,
                'banco' => '027 - BANCO DO ESTADO DE SANTA CATARINA S.A',
            ),
            13 => 
            array (
                'id' => 28,
                'banco' => '028 - BANCO DO ESTADO DA BAHIA S.A',
            ),
            14 => 
            array (
                'id' => 29,
                'banco' => '029 - BANCO DO ESTADO DO RIO DE JANEIRO S.A',
            ),
            15 => 
            array (
                'id' => 30,
                'banco' => '030 - BANCO DO ESTADO DA PARAIBA S.A',
            ),
            16 => 
            array (
                'id' => 31,
                'banco' => '031 - BANCO DO ESTADO DE GOIAS S.A',
            ),
            17 => 
            array (
                'id' => 32,
                'banco' => '032 - BANCO DO ESTADO DO MATO GROSSO S.A.',
            ),
            18 => 
            array (
                'id' => 33,
                'banco' => '033 - BANCO DO ESTADO DE SAO PAULO S.A',
            ),
            19 => 
            array (
                'id' => 34,
                'banco' => '034 - BANCO DO ESADO DO AMAZONAS S.A',
            ),
            20 => 
            array (
                'id' => 35,
                'banco' => '035 - BANCO DO ESTADO DO CEARA S.A',
            ),
            21 => 
            array (
                'id' => 36,
                'banco' => '036 - BANCO DO ESTADO DO MARANHAO S.A',
            ),
            22 => 
            array (
                'id' => 37,
                'banco' => '037 - BANCO DO ESTADO DO PARA S.A',
            ),
            23 => 
            array (
                'id' => 38,
                'banco' => '038 - BANCO DO ESTADO DO PARANA S.A',
            ),
            24 => 
            array (
                'id' => 39,
                'banco' => '039 - BANCO DO ESTADO DO PIAUI S.A',
            ),
            25 => 
            array (
                'id' => 41,
                'banco' => '041 - BANCO DO ESTADO DO RIO GRANDE DO SUL S.A',
            ),
            26 => 
            array (
                'id' => 47,
                'banco' => '047 - BANCO DO ESTADO DE SERGIPE S.A',
            ),
            27 => 
            array (
                'id' => 48,
                'banco' => '048 - BANCO DO ESTADO DE MINAS GERAIS S.A',
            ),
            28 => 
            array (
                'id' => 59,
                'banco' => '059 - BANCO DO ESTADO DE RONDONIA S.A',
            ),
            29 => 
            array (
                'id' => 66,
                'banco' => '066 - BANCO MORGAN STANLEY S.A',
            ),
            30 => 
            array (
                'id' => 70,
                'banco' => '070 - BANCO DE BRASILIA S.A',
            ),
            31 => 
            array (
                'id' => 77,
                'banco' => '077 - BANCO DE INTER S.A',
            ),
            32 => 
            array (
                'id' => 104,
                'banco' => '104 - CAIXA ECONOMICA FEDERAL',
            ),
            33 => 
            array (
                'id' => 106,
                'banco' => '106 - BANCO ITABANCO S.A.',
            ),
            34 => 
            array (
                'id' => 107,
                'banco' => '107 - BANCO BBM S.A',
            ),
            35 => 
            array (
                'id' => 109,
                'banco' => '109 - BANCO CREDIBANCO S.A',
            ),
            36 => 
            array (
                'id' => 116,
                'banco' => '116 - BANCO B.N.L DO BRASIL S.A',
            ),
            37 => 
            array (
                'id' => 129,
                'banco' => '129 - UBS BRASIL BANCO DE INVESTIMENTO S.A.',
            ),
            38 => 
            array (
                'id' => 148,
                'banco' => '148 - MULTI BANCO S.A',
            ),
            39 => 
            array (
                'id' => 151,
                'banco' => '151 - CAIXA ECONOMICA DO ESTADO DE SAO PAULO',
            ),
            40 => 
            array (
                'id' => 153,
                'banco' => '153 - CAIXA ECONOMICA DO ESTADO DO R.G.SUL',
            ),
            41 => 
            array (
                'id' => 165,
                'banco' => '165 - BANCO NORCHEM S.A',
            ),
            42 => 
            array (
                'id' => 166,
                'banco' => '166 - BANCO INTER-ATLANTICO S.A',
            ),
            43 => 
            array (
                'id' => 168,
                'banco' => '168 - BANCO C.C.F. BRASIL S.A',
            ),
            44 => 
            array (
                'id' => 175,
                'banco' => '175 - CONTINENTAL BANCO S.A',
            ),
            45 => 
            array (
                'id' => 184,
                'banco' => '184 - BBA - CREDITANSTALT S.A',
            ),
            46 => 
            array (
                'id' => 199,
                'banco' => '199 - BANCO FINANCIAL PORTUGUES',
            ),
            47 => 
            array (
                'id' => 200,
                'banco' => '200 - BANCO FRICRISA AXELRUD S.A',
            ),
            48 => 
            array (
                'id' => 201,
                'banco' => '201 - BANCO AUGUSTA INDUSTRIA E COMERCIAL S.A',
            ),
            49 => 
            array (
                'id' => 204,
                'banco' => '204 - BANCO S.R.L S.A',
            ),
            50 => 
            array (
                'id' => 205,
                'banco' => '205 - BANCO SUL AMERICA S.A',
            ),
            51 => 
            array (
                'id' => 206,
                'banco' => '206 - BANCO MARTINELLI S.A',
            ),
            52 => 
            array (
                'id' => 208,
                'banco' => '208 - BANCO PACTUAL S.A',
            ),
            53 => 
            array (
                'id' => 210,
                'banco' => '210 - DEUTSCH SUDAMERIKANICHE BANK AG',
            ),
            54 => 
            array (
                'id' => 211,
                'banco' => '211 - BANCO SISTEMA S.A',
            ),
            55 => 
            array (
                'id' => 212,
                'banco' => '212 - BANCO ORIGINAL S.A',
            ),
            56 => 
            array (
                'id' => 213,
                'banco' => '213 - BANCO ARBI S.A',
            ),
            57 => 
            array (
                'id' => 214,
                'banco' => '214 - BANCO DIBENS S.A',
            ),
            58 => 
            array (
                'id' => 215,
                'banco' => '215 - BANCO AMERICA DO SUL S.A',
            ),
            59 => 
            array (
                'id' => 216,
                'banco' => '216 - BANCO REGIONAL MALCON S.A',
            ),
            60 => 
            array (
                'id' => 217,
                'banco' => '217 - BANCO AGROINVEST S.A',
            ),
            61 => 
            array (
                'id' => 218,
                'banco' => '218 - BBS - BANCO BONSUCESSO S.A.',
            ),
            62 => 
            array (
                'id' => 219,
                'banco' => '219 - BANCO DE CREDITO DE SAO PAULO S.A',
            ),
            63 => 
            array (
                'id' => 220,
                'banco' => '220 - BANCO CREFISUL',
            ),
            64 => 
            array (
                'id' => 221,
                'banco' => '221 - BANCO GRAPHUS S.A',
            ),
            65 => 
            array (
                'id' => 222,
                'banco' => '222 - BANCO AGF BRASIL S. A.',
            ),
            66 => 
            array (
                'id' => 223,
                'banco' => '223 - BANCO INTERUNION S.A',
            ),
            67 => 
            array (
                'id' => 224,
                'banco' => '224 - BANCO FIBRA S.A',
            ),
            68 => 
            array (
                'id' => 225,
                'banco' => '225 - BANCO BRASCAN S.A',
            ),
            69 => 
            array (
                'id' => 228,
                'banco' => '228 - BANCO ICATU S.A',
            ),
            70 => 
            array (
                'id' => 229,
                'banco' => '229 - BANCO CRUZEIRO S.A',
            ),
            71 => 
            array (
                'id' => 230,
                'banco' => '230 - BANCO BANDEIRANTES S.A',
            ),
            72 => 
            array (
                'id' => 231,
                'banco' => '231 - BANCO BOAVISTA S.A',
            ),
            73 => 
            array (
                'id' => 232,
                'banco' => '232 - BANCO INTERPART S.A',
            ),
            74 => 
            array (
                'id' => 233,
                'banco' => '233 - BANCO MAPPIN S.A',
            ),
            75 => 
            array (
                'id' => 234,
                'banco' => '234 - BANCO LAVRA S.A.',
            ),
            76 => 
            array (
                'id' => 235,
                'banco' => '235 - BANCO LIBERAL S.A',
            ),
            77 => 
            array (
                'id' => 236,
                'banco' => '236 - BANCO CAMBIAL S.A',
            ),
            78 => 
            array (
                'id' => 237,
                'banco' => '237 - BANCO BRADESCO S.A',
            ),
            79 => 
            array (
                'id' => 239,
                'banco' => '239 - BANCO BANCRED S.A',
            ),
            80 => 
            array (
                'id' => 240,
                'banco' => '240 - BANCO DE CREDITO REAL DE MINAS GERAIS S.',
            ),
            81 => 
            array (
                'id' => 241,
                'banco' => '241 - BANCO CLASSICO S.A',
            ),
            82 => 
            array (
                'id' => 242,
                'banco' => '242 - BANCO EUROINVEST S.A',
            ),
            83 => 
            array (
                'id' => 243,
                'banco' => '243 - BANCO STOCK S.A',
            ),
            84 => 
            array (
                'id' => 244,
                'banco' => '244 - BANCO CIDADE S.A',
            ),
            85 => 
            array (
                'id' => 245,
                'banco' => '245 - BANCO EMPRESARIAL S.A',
            ),
            86 => 
            array (
                'id' => 246,
                'banco' => '246 - BANCO ABC ROMA S.A',
            ),
            87 => 
            array (
                'id' => 247,
                'banco' => '247 - BANCO OMEGA S.A',
            ),
            88 => 
            array (
                'id' => 249,
                'banco' => '249 - BANCO INVESTCRED S.A',
            ),
            89 => 
            array (
                'id' => 250,
                'banco' => '250 - BANCO SCHAHIN CURY S.A',
            ),
            90 => 
            array (
                'id' => 251,
                'banco' => '251 - BANCO SAO JORGE S.A.',
            ),
            91 => 
            array (
                'id' => 252,
                'banco' => '252 - BANCO FININVEST S.A',
            ),
            92 => 
            array (
                'id' => 254,
                'banco' => '254 - BANCO PARANA BANCO S.A',
            ),
            93 => 
            array (
                'id' => 255,
                'banco' => '255 - MILBANCO S.A.',
            ),
            94 => 
            array (
                'id' => 256,
                'banco' => '256 - BANCO GULVINVEST S.A',
            ),
            95 => 
            array (
                'id' => 258,
                'banco' => '258 - BANCO INDUSCRED S.A',
            ),
            96 => 
            array (
                'id' => 260,
                'banco' => '260 - NU PAGAMENTOS S.A',
            ),
            97 => 
            array (
                'id' => 261,
                'banco' => '261 - BANCO VARIG S.A',
            ),
            98 => 
            array (
                'id' => 262,
                'banco' => '262 - BANCO BOREAL S.A',
            ),
            99 => 
            array (
                'id' => 263,
                'banco' => '263 - BANCO CACIQUE',
            ),
            100 => 
            array (
                'id' => 264,
                'banco' => '264 - BANCO PERFORMANCE S.A',
            ),
            101 => 
            array (
                'id' => 265,
                'banco' => '265 - BANCO FATOR S.A',
            ),
            102 => 
            array (
                'id' => 266,
                'banco' => '266 - BANCO CEDULA S.A',
            ),
            103 => 
            array (
                'id' => 267,
                'banco' => '267 - BANCO BBM-COM.C.IMOB.CFI S.A.',
            ),
            104 => 
            array (
                'id' => 275,
                'banco' => '275 - BANCO REAL S.A',
            ),
            105 => 
            array (
                'id' => 277,
                'banco' => '277 - BANCO PLANIBANC S.A',
            ),
            106 => 
            array (
                'id' => 282,
                'banco' => '282 - BANCO BRASILEIRO COMERCIAL',
            ),
            107 => 
            array (
                'id' => 291,
                'banco' => '291 - BANCO DE CREDITO NACIONAL S.A',
            ),
            108 => 
            array (
                'id' => 294,
                'banco' => '294 - BCR - BANCO DE CREDITO REAL S.A',
            ),
            109 => 
            array (
                'id' => 295,
                'banco' => '295 - BANCO CREDIPLAN S.A',
            ),
            110 => 
            array (
                'id' => 300,
                'banco' => '300 - BANCO DE LA NACION ARGENTINA S.A',
            ),
            111 => 
            array (
                'id' => 302,
                'banco' => '302 - BANCO DO PROGRESSO S.A',
            ),
            112 => 
            array (
                'id' => 303,
                'banco' => '303 - BANCO HNF S.A.',
            ),
            113 => 
            array (
                'id' => 304,
                'banco' => '304 - BANCO PONTUAL S.A',
            ),
            114 => 
            array (
                'id' => 308,
                'banco' => '308 - BANCO COMERCIAL BANCESA S.A.',
            ),
            115 => 
            array (
                'id' => 318,
                'banco' => '318 - BANCO B.M.G. S.A',
            ),
            116 => 
            array (
                'id' => 320,
                'banco' => '320 - BANCO INDUSTRIAL E COMERCIAL',
            ),
            117 => 
            array (
                'id' => 341,
                'banco' => '341 - BANCO ITAU S.A',
            ),
            118 => 
            array (
                'id' => 346,
                'banco' => '346 - BANCO FRANCES E BRASILEIRO S.A',
            ),
            119 => 
            array (
                'id' => 347,
                'banco' => '347 - BANCO SUDAMERIS BRASIL S.A',
            ),
            120 => 
            array (
                'id' => 351,
                'banco' => '351 - BANCO BOZANO SIMONSEN S.A',
            ),
            121 => 
            array (
                'id' => 353,
                'banco' => '353 - BANCO GERAL DO COMERCIO S.A',
            ),
            122 => 
            array (
                'id' => 356,
                'banco' => '356 - ABN AMRO S.A',
            ),
            123 => 
            array (
                'id' => 366,
                'banco' => '366 - BANCO SOGERAL S.A',
            ),
            124 => 
            array (
                'id' => 369,
                'banco' => '369 - PONTUAL',
            ),
            125 => 
            array (
                'id' => 370,
                'banco' => '370 - BEAL - BANCO EUROPEU PARA AMERICA LATINA',
            ),
            126 => 
            array (
                'id' => 372,
                'banco' => '372 - BANCO ITAMARATI S.A',
            ),
            127 => 
            array (
                'id' => 375,
                'banco' => '375 - BANCO FENICIA S.A',
            ),
            128 => 
            array (
                'id' => 376,
                'banco' => '376 - CHASE MANHATTAN BANK S.A',
            ),
            129 => 
            array (
                'id' => 388,
                'banco' => '388 - BANCO MERCANTIL DE DESCONTOS S/A',
            ),
            130 => 
            array (
                'id' => 389,
                'banco' => '389 - BANCO MERCANTIL DO BRASIL S.A',
            ),
            131 => 
            array (
                'id' => 392,
                'banco' => '392 - BANCO MERCANTIL DE SAO PAULO S.A',
            ),
            132 => 
            array (
                'id' => 394,
                'banco' => '394 - BANCO B.M.C. S.A',
            ),
            133 => 
            array (
                'id' => 399,
                'banco' => '399 - HSBC BANK BRASIL S.A. – BANCO MÚLTIPLO',
            ),
            134 => 
            array (
                'id' => 409,
                'banco' => '409 - UNIBANCO - UNIAO DOS BANCOS BRASILEIROS',
            ),
            135 => 
            array (
                'id' => 412,
                'banco' => '412 - BANCO NACIONAL DA BAHIA S.A',
            ),
            136 => 
            array (
                'id' => 415,
                'banco' => '415 - BANCO NACIONAL S.A',
            ),
            137 => 
            array (
                'id' => 420,
                'banco' => '420 - BANCO NACIONAL DO NORTE S.A',
            ),
            138 => 
            array (
                'id' => 422,
                'banco' => '422 - BANCO SAFRA S.A',
            ),
            139 => 
            array (
                'id' => 424,
                'banco' => '424 - BANCO NOROESTE S.A',
            ),
            140 => 
            array (
                'id' => 434,
                'banco' => '434 - BANCO FORTALEZA S.A',
            ),
            141 => 
            array (
                'id' => 453,
                'banco' => '453 - BANCO RURAL S.A',
            ),
            142 => 
            array (
                'id' => 456,
                'banco' => '456 - BANCO TOKIO S.A',
            ),
            143 => 
            array (
                'id' => 464,
                'banco' => '464 - BANCO SUMITOMO BRASILEIRO S.A',
            ),
            144 => 
            array (
                'id' => 466,
                'banco' => '466 - BANCO MITSUBISHI BRASILEIRO S.A',
            ),
            145 => 
            array (
                'id' => 472,
                'banco' => '472 - LLOYDS BANK PLC',
            ),
            146 => 
            array (
                'id' => 473,
                'banco' => '473 - BANCO FINANCIAL PORTUGUES S.A',
            ),
            147 => 
            array (
                'id' => 477,
                'banco' => '477 - CITIBANK N.A',
            ),
            148 => 
            array (
                'id' => 479,
                'banco' => '479 - BANCO DE BOSTON S.A',
            ),
            149 => 
            array (
                'id' => 480,
                'banco' => '480 - BANCO PORTUGUES DO ATLANTICO-BRASIL S.A',
            ),
            150 => 
            array (
                'id' => 483,
                'banco' => '483 - BANCO AGRIMISA S.A.',
            ),
            151 => 
            array (
                'id' => 487,
                'banco' => '487 - DEUTSCHE BANK S.A - BANCO ALEMAO',
            ),
            152 => 
            array (
                'id' => 488,
                'banco' => '488 - BANCO J. P. MORGAN S.A',
            ),
            153 => 
            array (
                'id' => 489,
                'banco' => '489 - BANESTO BANCO URUGAUAY S.A',
            ),
            154 => 
            array (
                'id' => 492,
                'banco' => '492 - INTERNATIONALE NEDERLANDEN BANK N.V.',
            ),
            155 => 
            array (
                'id' => 493,
                'banco' => '493 - BANCO UNION S.A.C.A',
            ),
            156 => 
            array (
                'id' => 494,
                'banco' => '494 - BANCO LA REP. ORIENTAL DEL URUGUAY',
            ),
            157 => 
            array (
                'id' => 495,
                'banco' => '495 - BANCO LA PROVINCIA DE BUENOS AIRES',
            ),
            158 => 
            array (
                'id' => 496,
                'banco' => '496 - BANCO EXTERIOR DE ESPANA S.A',
            ),
            159 => 
            array (
                'id' => 498,
                'banco' => '498 - CENTRO HISPANO BANCO',
            ),
            160 => 
            array (
                'id' => 499,
                'banco' => '499 - BANCO IOCHPE S.A',
            ),
            161 => 
            array (
                'id' => 501,
                'banco' => '501 - BANCO BRASILEIRO IRAQUIANO S.A.',
            ),
            162 => 
            array (
                'id' => 502,
                'banco' => '502 - BANCO SANTANDER S.A',
            ),
            163 => 
            array (
                'id' => 504,
                'banco' => '504 - BANCO MULTIPLIC S.A',
            ),
            164 => 
            array (
                'id' => 505,
                'banco' => '505 - BANCO GARANTIA S.A',
            ),
            165 => 
            array (
                'id' => 600,
                'banco' => '600 - BANCO LUSO BRASILEIRO S.A',
            ),
            166 => 
            array (
                'id' => 601,
                'banco' => '601 - BFC BANCO S.A.',
            ),
            167 => 
            array (
                'id' => 602,
                'banco' => '602 - BANCO PATENTE S.A',
            ),
            168 => 
            array (
                'id' => 604,
                'banco' => '604 - BANCO INDUSTRIAL DO BRASIL S.A',
            ),
            169 => 
            array (
                'id' => 607,
                'banco' => '607 - BANCO SANTOS NEVES S.A',
            ),
            170 => 
            array (
                'id' => 608,
                'banco' => '608 - BANCO OPEN S.A',
            ),
            171 => 
            array (
                'id' => 610,
                'banco' => '610 - BANCO V.R. S.A',
            ),
            172 => 
            array (
                'id' => 611,
                'banco' => '611 - BANCO PAULISTA S.A',
            ),
            173 => 
            array (
                'id' => 612,
                'banco' => '612 - BANCO GUANABARA S.A',
            ),
            174 => 
            array (
                'id' => 613,
                'banco' => '613 - BANCO PECUNIA S.A',
            ),
            175 => 
            array (
                'id' => 616,
                'banco' => '616 - BANCO INTERPACIFICO S.A',
            ),
            176 => 
            array (
                'id' => 617,
                'banco' => '617 - BANCO INVESTOR S.A.',
            ),
            177 => 
            array (
                'id' => 618,
                'banco' => '618 - BANCO TENDENCIA S.A',
            ),
            178 => 
            array (
                'id' => 621,
                'banco' => '621 - BANCO APLICAP S.A.',
            ),
            179 => 
            array (
                'id' => 622,
                'banco' => '622 - BANCO DRACMA S.A',
            ),
            180 => 
            array (
                'id' => 623,
                'banco' => '623 - BANCO PANAMERICANO S.A',
            ),
            181 => 
            array (
                'id' => 624,
                'banco' => '624 - BANCO GENERAL MOTORS S.A',
            ),
            182 => 
            array (
                'id' => 625,
                'banco' => '625 - BANCO ARAUCARIA S.A',
            ),
            183 => 
            array (
                'id' => 626,
                'banco' => '626 - BANCO FICSA S.A',
            ),
            184 => 
            array (
                'id' => 627,
                'banco' => '627 - BANCO DESTAK S.A',
            ),
            185 => 
            array (
                'id' => 628,
                'banco' => '628 - BANCO CRITERIUM S.A',
            ),
            186 => 
            array (
                'id' => 629,
                'banco' => '629 - BANCORP BANCO COML. E. DE INVESTMENTO',
            ),
            187 => 
            array (
                'id' => 630,
                'banco' => '630 - BANCO INTERCAP S.A',
            ),
            188 => 
            array (
                'id' => 633,
                'banco' => '633 - BANCO REDIMENTO S.A',
            ),
            189 => 
            array (
                'id' => 634,
                'banco' => '634 - BANCO TRIANGULO S.A',
            ),
            190 => 
            array (
                'id' => 635,
                'banco' => '635 - BANCO DO ESTADO DO AMAPA S.A',
            ),
            191 => 
            array (
                'id' => 637,
                'banco' => '637 - BANCO SOFISA S.A',
            ),
            192 => 
            array (
                'id' => 638,
                'banco' => '638 - BANCO PROSPER S.A',
            ),
            193 => 
            array (
                'id' => 639,
                'banco' => '639 - BIG S.A. - BANCO IRMAOS GUIMARAES',
            ),
            194 => 
            array (
                'id' => 640,
                'banco' => '640 - BANCO DE CREDITO METROPOLITANO S.A',
            ),
            195 => 
            array (
                'id' => 641,
                'banco' => '641 - BANCO EXCEL ECONOMICO S/A',
            ),
            196 => 
            array (
                'id' => 643,
                'banco' => '643 - BANCO SEGMENTO S.A',
            ),
            197 => 
            array (
                'id' => 645,
                'banco' => '645 - BANCO DO ESTADO DE RORAIMA S.A',
            ),
            198 => 
            array (
                'id' => 647,
                'banco' => '647 - BANCO MARKA S.A',
            ),
            199 => 
            array (
                'id' => 648,
                'banco' => '648 - BANCO ATLANTIS S.A',
            ),
            200 => 
            array (
                'id' => 649,
                'banco' => '649 - BANCO DIMENSAO S.A',
            ),
            201 => 
            array (
                'id' => 650,
                'banco' => '650 - BANCO PEBB S.A',
            ),
            202 => 
            array (
                'id' => 652,
                'banco' => '652 - ITAÚ UNIBANCO HOLDING S.A.',
            ),
            203 => 
            array (
                'id' => 653,
                'banco' => '653 - BANCO INDUSVAL S.A',
            ),
            204 => 
            array (
                'id' => 654,
                'banco' => '654 - BANCO A. J. RENNER S.A',
            ),
            205 => 
            array (
                'id' => 655,
                'banco' => '655 - BANCO VOTORANTIM S.A.',
            ),
            206 => 
            array (
                'id' => 656,
                'banco' => '656 - BANCO MATRIX S.A',
            ),
            207 => 
            array (
                'id' => 657,
                'banco' => '657 - BANCO TECNICORP S.A',
            ),
            208 => 
            array (
                'id' => 658,
                'banco' => '658 - BANCO PORTO REAL S.A',
            ),
            209 => 
            array (
                'id' => 702,
                'banco' => '702 - BANCO SANTOS S.A',
            ),
            210 => 
            array (
                'id' => 705,
                'banco' => '705 - BANCO INVESTCORP S.A.',
            ),
            211 => 
            array (
                'id' => 707,
                'banco' => '707 - BANCO DAYCOVAL S.A',
            ),
            212 => 
            array (
                'id' => 711,
                'banco' => '711 - BANCO VETOR S.A.',
            ),
            213 => 
            array (
                'id' => 713,
                'banco' => '713 - BANCO CINDAM S.A',
            ),
            214 => 
            array (
                'id' => 715,
                'banco' => '715 - BANCO VEGA S.A',
            ),
            215 => 
            array (
                'id' => 718,
                'banco' => '718 - BANCO OPERADOR S.A',
            ),
            216 => 
            array (
                'id' => 719,
                'banco' => '719 - BANCO PRIMUS S.A',
            ),
            217 => 
            array (
                'id' => 720,
                'banco' => '720 - BANCO MAXINVEST S.A',
            ),
            218 => 
            array (
                'id' => 721,
                'banco' => '721 - BANCO CREDIBEL S.A',
            ),
            219 => 
            array (
                'id' => 722,
                'banco' => '722 - BANCO INTERIOR DE SAO PAULO S.A',
            ),
            220 => 
            array (
                'id' => 724,
                'banco' => '724 - BANCO PORTO SEGURO S.A',
            ),
            221 => 
            array (
                'id' => 725,
                'banco' => '725 - BANCO FINABANCO S.A',
            ),
            222 => 
            array (
                'id' => 726,
                'banco' => '726 - BANCO UNIVERSAL S.A',
            ),
            223 => 
            array (
                'id' => 728,
                'banco' => '728 - BANCO FITAL S.A',
            ),
            224 => 
            array (
                'id' => 729,
                'banco' => '729 - BANCO FONTE S.A',
            ),
            225 => 
            array (
                'id' => 730,
                'banco' => '730 - BANCO COMERCIAL PARAGUAYO S.A',
            ),
            226 => 
            array (
                'id' => 731,
                'banco' => '731 - BANCO GNPP S.A.',
            ),
            227 => 
            array (
                'id' => 732,
                'banco' => '732 - BANCO PREMIER S.A.',
            ),
            228 => 
            array (
                'id' => 733,
                'banco' => '733 - BANCO NACOES S.A.',
            ),
            229 => 
            array (
                'id' => 734,
                'banco' => '734 - BANCO GERDAU S.A',
            ),
            230 => 
            array (
                'id' => 735,
                'banco' => '735 - BACO POTENCIAL',
            ),
            231 => 
            array (
                'id' => 736,
                'banco' => '736 - BANCO UNITED S.A',
            ),
            232 => 
            array (
                'id' => 737,
                'banco' => '737 - THECA',
            ),
            233 => 
            array (
                'id' => 738,
                'banco' => '738 - MARADA',
            ),
            234 => 
            array (
                'id' => 739,
                'banco' => '739 - BGN',
            ),
            235 => 
            array (
                'id' => 740,
                'banco' => '740 - BCN BARCLAYS',
            ),
            236 => 
            array (
                'id' => 741,
                'banco' => '741 - BRP',
            ),
            237 => 
            array (
                'id' => 742,
                'banco' => '742 - EQUATORIAL',
            ),
            238 => 
            array (
                'id' => 743,
                'banco' => '743 - BANCO EMBLEMA S.A',
            ),
            239 => 
            array (
                'id' => 744,
                'banco' => '744 - THE FIRST NATIONAL BANK OF BOSTON',
            ),
            240 => 
            array (
                'id' => 745,
                'banco' => '745 - CITIBAN N.A.',
            ),
            241 => 
            array (
                'id' => 746,
                'banco' => '746 - MODAL SA',
            ),
            242 => 
            array (
                'id' => 747,
                'banco' => '747 - RAIBOBANK DO BRASIL',
            ),
            243 => 
            array (
                'id' => 748,
                'banco' => '748 - SICREDI',
            ),
            244 => 
            array (
                'id' => 749,
                'banco' => '749 - BRMSANTIL SA',
            ),
            245 => 
            array (
                'id' => 750,
                'banco' => '750 - BANCO REPUBLIC NATIONAL OF NEW YORK (BRA',
                ),
                246 => 
                array (
                    'id' => 751,
                    'banco' => '751 - DRESDNER BANK LATEINAMERIKA-BRASIL S/A',
                ),
                247 => 
                array (
                    'id' => 752,
                    'banco' => '752 - BANCO BANQUE NATIONALE DE PARIS BRASIL S',
                ),
                248 => 
                array (
                    'id' => 753,
                    'banco' => '753 - BANCO COMERCIAL URUGUAI S.A.',
                ),
                249 => 
                array (
                    'id' => 755,
                    'banco' => '755 - BANCO MERRILL LYNCH S.A',
                ),
                250 => 
                array (
                    'id' => 756,
                    'banco' => '756 - BANCO COOPERATIVO DO BRASIL S.A.',
                ),
                251 => 
                array (
                    'id' => 757,
                    'banco' => '757 - BANCO KEB DO BRASIL S.A.',
                ),
            ));
        
        
    }
}