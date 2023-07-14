<?php

class Clock {
    private int $hour;
    private int $minute;
    private int $second;
    public function set(int $hour, int $minute, int $second): void {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }
    public function to_str(): string {
        if (!(0 <= $this->hour && $this->hour <= 23 && 0 <= $this->minute && $this->minute <= 59 && 0 <= $this->second && $this->second <= 59)) {
            return "Error";
        }


        return sprintf("%02d:%02d:%02d", $this->hour,$this->minute, $this->second);
    }
    public function shift(int $diff_second) {
        $diff_hour = (int)($diff_second / 3600);
        $diff_second %= 3600;
        $diff_minute = (int)($diff_second / 60);
        $diff_second %= 60;

        $this->second += $diff_second;
        if ($this->second >= 60) {
            $this->minute += 1;
            $this->second -= 60;
        } elseif ($this->second < 0) {
            $this->minute -= 1;
            $this->second += 60;
        }
        $this->minute += $diff_minute;
        if ($this->minute >= 60) {
            $this->hour += 1;
            $this->minute -= 60;
        } elseif ($this->minute < 0) {
            $this->hour -= 1;
            $this->minute += 60;
        }
        $this->hour += $diff_hour;
        if ($this->hour >= 24) {
            $this->hour -= 24;
        } elseif ($this->hour < 0) {
            $this->hour += 24;
        }
    }
}

[$hour,$minute,$second] = array_map(fn($v) => (int) $v, explode(" ", trim(fgets(STDIN))));
$diff_second = (int) fgets(STDIN);

$clock = new Clock();
$clock->set($hour,$minute,$second);

echo $clock->to_str() . PHP_EOL;
$clock->shift($diff_second);
echo $clock->to_str() . PHP_EOL;
