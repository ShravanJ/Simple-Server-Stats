#!/bin/bash
cpuTemp0=$(cat /sys/class/thermal/thermal_zone0/temp)
cpuTemp1=$(($cpuTemp0/1000 * 9/5 + 32))

echo CPU temp": "$cpuTemp1" degrees F"
