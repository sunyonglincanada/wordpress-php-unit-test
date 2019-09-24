<?php
/**
 * Sample Test Case
 *
 * Notes:
 * cat_is_ancestor_of is validated under test\term\term_is_ancestor_of
 *
 * @group sample.php
 */

class SampleTest extends WP_UnitTestCase {

    /**
     * Add trailing slash when none is present
     */
    public function test_trailingslashit_should_add_slash_when_none_is_present() {
        $this->assertSame( 'foo/', trailingslashit( 'foo' ) );
    }

//    public function test_eric_theme_function() {
//        $this->assertSame( '123', eric_theme_function() );
//    }
}