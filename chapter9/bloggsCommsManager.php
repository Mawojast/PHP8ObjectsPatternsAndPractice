<?php
class BloggsCommsManager extends CommsManager {

    public function getHeaderText(): string {
        return "BloggsHeader\n";
    }

    public function make(int $flag_int): Encoder {

        switch ($flag_int) {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
            default:
                return new BloggsApptEncoder();
        }
    }
    public function getFooterText(): string {

        return "BloggsFooter\n";
    }
}
?> 