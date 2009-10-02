#!/bin/sh
find . -name "*.swp" -exec rm -f {} \;
find . -name "*~" -exec rm -f {} \;
