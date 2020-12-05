#!/bin/bash

portindex -f | tee Portindex.log >&2

for P in $( cat Portindex.log | grep -E "^Adding (sub)?port " | cut -f3 -d' ' ) ; do
    port list $P | uniq
done
