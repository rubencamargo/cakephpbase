<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'num_code' => 1,
                'iso1_code' => '',
                'name' => 'Lorem ipsum dolor sit amet',
                'name_caps' => 'Lorem ipsum dolor sit amet',
                'iso3_code' => '',
                'created' => '2023-04-25 15:32:34',
                'modified' => '2023-04-25 15:32:34',
            ],
        ];
        parent::init();
    }
}
