<?php
namespace MapasCulturais\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\entity(repositoryClass="MapasCulturais\Repository")
 */
class SealAgentRelation extends AgentRelation {

    /**
     * @var \MapasCulturais\Entities\Seal
     *
     * @ORM\ManyToOne(targetEntity="MapasCulturais\Entities\Seal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     * })
     */
    protected $owner;
}