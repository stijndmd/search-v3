<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on workflowStatus.
 */
class WorkflowStatus extends AbstractParameter
{
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_READY_FOR_VALIDATION = 'READY_FOR_VALIDATION';
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_DELETED = 'DELETED';

    /**
     * workflowStatus constructor.
     * @param $workflowStatus
     */
    public function __construct(string $workflowStatus)
    {
        $this->value = $workflowStatus;
        $this->key = 'workflowStatus';
    }
}
