<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\WorkflowStatus;

class WorkflowStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $workflow = new WorkflowStatus(WorkflowStatus::STATUS_APPROVED);

        $key = $workflow->getKey();
        $value = $workflow->getValue();

        $this->assertEquals($key, 'workflowStatus');
        $this->assertEquals($value, 'APPROVED');
    }
}
