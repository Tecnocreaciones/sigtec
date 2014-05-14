<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity;

/**
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
interface ReportTechnicalInterface
{
    /**
     * En progreso.(Cliente)
     */
    const STATUS_IN_PROGRESS = 0;
    /**
     * Anulado.(Cliente|Revisor)
     */
    const STATUS_CANCELED = 1;
    /**
     * En espera de correción por el cliente.(Cliente)
     */
    const STATUS_PENDING_CORRECTION = 2;
    /**
     * En revisión. Enviado al revisor. (Revisor)
     */
    const STATUS_IN_REVIEW = 3;
    /**
     * Revisado.(Revisor)
     */
    const STATUS_REVISED = 4;
    /**
     * Aprobado.(Gerente tecnico)
     */
    const STATUS_APPROVED = 5;
    /**
     * Rechazado.(Gerente Tecnico)
     */
    const STATUS_REJECTED = 6;
    
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ReportTechnical
     */
    public function setCreatedAt($createdAt);

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt();

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return ReportTechnical
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt();

    /**
     * Set deletedAt
     *
     * @param string $deletedAt
     * @return ReportTechnical
     */
    public function setDeletedAt($deletedAt);

    /**
     * Get deletedAt
     *
     * @return string 
     */
    public function getDeletedAt();

    /**
     * Set status
     *
     * @param integer $status
     * @return ReportTechnical
     */
    public function setStatus($status);

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus();

    /**
     * Set company
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
     * @return ReportTechnical
     */
    public function setCompany(\Coramer\Sigtec\CompanyBundle\Entity\Company $company = null);

    /**
     * Get company
     *
     * @return \Coramer\Sigtec\CompanyBundle\Entity\Company 
     */
    public function getCompany();

    /**
     * Set archive
     *
     * @param string $archive
     * @return ReportTechnical
     */
    public function setArchive($archive);

    /**
     * Get archive
     *
     * @return string 
     */
    public function getArchive();
}
