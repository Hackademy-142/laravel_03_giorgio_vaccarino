<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function oggetti()
    {
        $arrayOggetti = [
            ['nome' => 'Televisore Samsung', 'prezzo' => 699.99, 'anno' => 2023, 'descrizione' => 'Televisore Smart TV 4K con schermo da 55 pollici'],
            ['nome' => 'Macchina da caffè', 'prezzo' => 149.99, 'anno' => 2022, 'descrizione' => 'Macchina da caffè a capsule con funzione di schiumatura del latte'],
            ['nome' => 'Smartphone Xiaomi', 'prezzo' => 399.99, 'anno' => 2023, 'descrizione' => 'Smartphone Android con fotocamera da 108 MP e display AMOLED'],
            ['nome' => 'Laptop ASUS', 'prezzo' => 899.99, 'anno' => 2022, 'descrizione' => 'Laptop con processore Intel Core i7, 16 GB di RAM e SSD da 512 GB'],
            ['nome' => 'Cuffie Sony', 'prezzo' => 129.99, 'anno' => 2023, 'descrizione' => 'Cuffie wireless con cancellazione attiva del rumore e batteria a lunga durata'],
            ['nome' => 'Forno a microonde', 'prezzo' => 79.99, 'anno' => 2022, 'descrizione' => 'Forno a microonde con capacità di 20 litri e funzioni preimpostate'],
            ['nome' => 'Aspirapolvere Dyson', 'prezzo' => 399.99, 'anno' => 2023, 'descrizione' => 'Aspirapolvere senza fili con tecnologia ciclonica e autonomia fino a 60 minuti'],
            ['nome' => 'Fotocamera Canon', 'prezzo' => 599.99, 'anno' => 2022, 'descrizione' => 'Fotocamera reflex con sensore CMOS da 24.1 MP e registrazione video in 4K'],
            ['nome' => 'Bicicletta elettrica', 'prezzo' => 1999.99, 'anno' => 2023, 'descrizione' => 'Bicicletta elettrica pieghevole con motore da 500 W e batteria rimovibile'],
            ['nome' => 'Tostapane Philips', 'prezzo' => 49.99, 'anno' => 2022, 'descrizione' => 'Tostapane con scomparti extra larghi e funzione di scongelamento']
        ];
        return view('oggetti/oggetti', ['oggetti'=>$arrayOggetti]);
    }

    public function dettaglio($nome) 
    {
        $arrayOggetti = [
            ['nome' => 'Televisore Samsung', 'prezzo' => 699.99, 'anno' => 2023, 'descrizione' => 'Televisore Smart TV 4K con schermo da 55 pollici'],
            ['nome' => 'Macchina da caffè', 'prezzo' => 149.99, 'anno' => 2022, 'descrizione' => 'Macchina da caffè a capsule con funzione di schiumatura del latte'],
            ['nome' => 'Smartphone Xiaomi', 'prezzo' => 399.99, 'anno' => 2023, 'descrizione' => 'Smartphone Android con fotocamera da 108 MP e display AMOLED'],
            ['nome' => 'Laptop ASUS', 'prezzo' => 899.99, 'anno' => 2022, 'descrizione' => 'Laptop con processore Intel Core i7, 16 GB di RAM e SSD da 512 GB'],
            ['nome' => 'Cuffie Sony', 'prezzo' => 129.99, 'anno' => 2023, 'descrizione' => 'Cuffie wireless con cancellazione attiva del rumore e batteria a lunga durata'],
            ['nome' => 'Forno a microonde', 'prezzo' => 79.99, 'anno' => 2022, 'descrizione' => 'Forno a microonde con capacità di 20 litri e funzioni preimpostate'],
            ['nome' => 'Aspirapolvere Dyson', 'prezzo' => 399.99, 'anno' => 2023, 'descrizione' => 'Aspirapolvere senza fili con tecnologia ciclonica e autonomia fino a 60 minuti'],
            ['nome' => 'Fotocamera Canon', 'prezzo' => 599.99, 'anno' => 2022, 'descrizione' => 'Fotocamera reflex con sensore CMOS da 24.1 MP e registrazione video in 4K'],
            ['nome' => 'Bicicletta elettrica', 'prezzo' => 1999.99, 'anno' => 2023, 'descrizione' => 'Bicicletta elettrica pieghevole con motore da 500 W e batteria rimovibile'],
            ['nome' => 'Tostapane Philips', 'prezzo' => 49.99, 'anno' => 2022, 'descrizione' => 'Tostapane con scomparti extra larghi e funzione di scongelamento']
        ];
        foreach($arrayOggetti as $oggetto)
        {
            if($nome == $oggetto['nome'])
            {
                return view('oggetti/dettaglio', ['oggetto'=>$oggetto]);
            }
        }
    }
}
