<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\FixturesBundle\DataFixtures\ORM;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadAdditiveData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadAdditiveData implements FixtureInterface
{
    public function load(ObjectManager $manager) {
        
        $additive = new Additive();
        $additive->setDescription('Aditivo Oxo-biodegradable');
            $manager->persist($additive);
        
        $additive = new Additive();
        $additive->setDescription('Aceite mineral');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Acido estearico');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Aditivo 3 en 1');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Aditivo cling');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Aditivo Oxo-biodegradable');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Aditivos líquidos');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Agente antibloqueo');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Agente anti-uv');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Agente espumante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Antiestático');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Antioxidante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Ayudante de proceso');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Carbonato de calcio');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Carga mineral');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Cargas');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Cera');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Cera parafínica');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Cera polietilénica');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Coestabilizante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Colorante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado antifibrilante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de antibloqueo');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de antiestático');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de antioxidante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de anti-uv');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de carbonato de calcio');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de color');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de deslizante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de deslizante y antibloqueo');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de nucleante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de oxobiodegradable');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de perlado');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de talco');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Concentrado de twist');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Deslizante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Desmoldeante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Dióxido de titanio');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Dispersante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Enzimaje');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Espumante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Estabilizante térmico');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Estabilizante térmico base Pb');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Estabilizante térmico de Ba / Cd');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Estabilizante térmico de Ba / Zn');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Estabilizante térmico de Ca / Zn');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Estabilizante térmico de organoestaño');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Estearato de calcio');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Estearato de zinc');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Eva');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Flexibilizante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Limpiador');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Lubricante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Lubricante externo');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Lubricante interno');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Material de purga');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Metalocenos');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Mezclar');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Modificador de impacto');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Negro de humo');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Octano');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Paquete de aditivos para PVC');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Peróxido');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Pigmento');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Pigmento inorgánico');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Pigmento orgánico');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Pigmentos fluorescentes');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Pinturas');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Plastificante');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Plastificante DBM');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Plastificante DIBP');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Plastificante DIDA');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Plastificante DINP');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Plastificante DOP');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Plastificante Polimérico');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Plastificante TOTM');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Poliisobutileno');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Porofor');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Solventes');
            $manager->persist($additive);
            
        $additive = new Additive();
        $additive->setDescription('Tinta');
            $manager->persist($additive);
            
            
        $manager->flush();
        
    }
}
