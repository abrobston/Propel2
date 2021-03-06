<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Propel\Generator\Task;

use Propel\Generator\Util\SqlManager;

/**
 * The new task for building SQL DDL based on the XML datamodel.
 *
 * @author     William Durand <william.durand1@gmail.com>
 */
class PropelSqlBuildTask extends AbstractPropelDataModelTask
{
    public function main()
    {
        $this->validate();
        $this->packageObjectModel = true;

        $manager = new SqlManager();
        $manager->setGeneratorConfig($this->getGeneratorConfig());
        $manager->setDataModels($this->getDataModels());
        $manager->setWorkingDirectory($this->getOutputDirectory());

        $manager->buildSql();
    }
}
