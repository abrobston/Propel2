<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Propel\Tests\Generator\Builder\Util;

use Propel\Generator\Builder\Util\DefaultEnglishPluralizer;

/**
 * Tests for the StandardEnglishPluralizer class
 *
 */
class DefaultEnglishPluralizerTest extends \PHPUnit_Framework_TestCase
{
    public function getPluralFormDataProvider()
    {
        return array(
            array('', 's'),
            array('user', 'users'),
            array('users', 'userss'),
            array('User', 'Users'),
            array('sheep', 'sheeps'),
            array('Sheep', 'Sheeps'),
            array('wife', 'wifes'),
            array('Wife', 'Wifes'),
            array('country', 'countrys'),
            array('Country', 'Countrys'),
        );
    }

    /**
     * @dataProvider getPluralFormDataProvider
     */
    public function testgetPluralForm($input, $output)
    {
        $pluralizer = new DefaultEnglishPluralizer();
        $this->assertEquals($output, $pluralizer->getPluralForm($input));
    }
}
