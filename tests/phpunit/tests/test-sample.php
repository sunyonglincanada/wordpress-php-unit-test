<?php
class SampleTest extends WP_UnitTestCase {

    public function test_trailingslashit_should_add_slash_when_none_is_present() {
        $this->assertSame( 'foo/', trailingslashit( 'foo' ) );
    }

//    public function test_eric_theme_function() {
//        $this->assertSame( '123', eric_theme_function() );
//    }
}