#!/usr/bin/env bash

SOURCE_DIR=/opt/local/var/macports/sources/rsync.macports.org/macports/release/tarballs/ports/lang/php
TARGET_DIR=$( dirname $0 )

if [ ! -d ${SOURCE_DIR} ]; then
  echo "Missing source directory: ${SOURCE_DIR}" >&2
  exit 1
fi

if [ ! -d ${TARGET_DIR} ]; then
  echo "Missing target directory: ${TARGET_DIR}" >&2
  exit 1
fi

cat ${SOURCE_DIR}/Portfile >${TARGET_DIR}/Portfile
patch -u -l ${TARGET_DIR}/Portfile ${TARGET_DIR}/Portfile.patch
rm ${TARGET_DIR}/files/*
cp ${SOURCE_DIR}/files/* ${TARGET_DIR}/files/
