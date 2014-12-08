#!/bin/bash

#######################################################################
################## Get Committees #####################################
#######################################################################

C_DOCID="1"

C_FILES=WA/committees/*
for c in $C_FILES
do
  echo "Processing $c file..."
  # take action on each file. $c store current file name
C_TEXT=$(<$c)

echo -e "$C_DOCID \t $C_TEXT \t $c" >>WA/committees.tsv
let C_DOCID=C_DOCID+1
done

#######################################################################
################## Get Bills (Lower) ##################################
#######################################################################

BL_DOCID="1"

BL_FILES=(WA/bills/wa/2013-2014/lower/*)
for bl in "${BL_FILES[@]}";
do
  echo "Processing "$bl" file..."
  # take action on each file. $bl store current file name
BL_TEXT=$(<"$bl")

echo -e "$BL_DOCID \t $BL_TEXT \t $bl" >> WA/l_bills.tsv
let BL_DOCID=BL_DOCID+1
done

#######################################################################
################## Get Bills (Upper) ##################################
#######################################################################

BU_DOCID="1"

BU_FILES=(WA/bills/wa/2013-2014/upper/*)
for bu in "${BU_FILES[@]}";
do
  echo "Processing "$bu" file..."
  # take action on each file. $bu store current file name
BU_TEXT=$(<"$bu")

echo -e "$BU_DOCID \t $BU_TEXT \t $bu" >> WA/u_bills.tsv
let BU_DOCID=BU_DOCID+1
done

#######################################################################
################## Get Legislators ####################################
#######################################################################

L_DOCID="1"

L_FILES=(WA/legislators/*)
for l in "${L_FILES[@]}"
do
  echo "Processing $l file..."
  # take action on each file. $l store current file name
L_TEXT=$(<"$l")

echo -en "$L_DOCID \t" >> WA/legislators.tsv
echo -n "$L_TEXT" >> WA/legislators.tsv 
echo -e "\t $l" >> WA/legislators.tsv 
let L_DOCID=L_DOCID+1
done

sudo php make_committee.php
sudo php make_legs.php
sudo php make_l_bills.php
sudo php make_u_bills.php

sudo indexer -c tsv.conf --all
sudo searchd -c tsv.conf

