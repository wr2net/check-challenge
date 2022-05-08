#!/bin/bash

#Step 1 - Build Application
echo -e "|------------------- Step 1 - Build Application -------------------|\n"
sh scripts/build.sh

clear

#Step 2 - Start Application
echo -e "|------------------- Step 2 - Start Application -------------------|\n"
sh scripts/start.sh

clear

#Step 3 - Setup Application
echo -e "|------------------- Step 3 - Setup Application -------------------|\n"
sh scripts/setup.sh

clear

#Step 4 - Run Tests Application
echo -e "|------------------- Step 4 - Run Tests Application -------------------|\n"
sh scripts/tests.sh

echo -e "\n\n\n|------------------- FINISHED -------------------|\n"