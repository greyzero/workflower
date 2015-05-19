<?php
/*
 * Copyright (c) 2015 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of Workflower.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\Workflower\Workflow\Type;

use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Entity\Operation\EquatableInterface;
use PHPMentors\DomainKata\Entity\Operation\IdentifiableInterface;

interface TypeInterface extends EntityInterface, EquatableInterface, IdentifiableInterface
{
    /**
     * @return string
     */
    public function getName();
}
