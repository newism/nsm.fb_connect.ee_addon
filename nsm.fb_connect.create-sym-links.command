#!/bin/bash

# This script creates symlinks from the local GIT repo into your EE install. It also copies some of the extension icons.

dirname=`dirname "$0"`

echo "
You are about to create symlinks for NSM FB Connect
---------------------------------------------------

The symlinks use absolute paths so they are for development purposes only.

The following directories must be writable:

themes/cp_themes/default
system/extensions
system/modules
system/language/*
system/lib
themes/default
themes/cp_global_images

Enter the full path to your ExpressionEngine install *without a trailing slash* [ENTER]:"
read ee_path
echo "
Enter your ee system folder name [ENTER]:"
read ee_system_folder

# extensions
ln -s -f "$dirname"/system/extensions/ext.nsm_facebook_ext.php "$ee_path"/"$ee_system_folder"/extensions/ext.nsm_facebook_ext.php
ln -s -f "$dirname"/system/extensions/nsm_facebook "$ee_path"/"$ee_system_folder"/extensions/nsm_facebook

# language
ln -s -f "$dirname"/system/language/english/lang.nsm_facebook_ext.php "$ee_path"/"$ee_system_folder"/language/english/lang.nsm_facebook_ext.php

# lib files
ln -s -f "$dirname"/system/lib/facebook-platform "$ee_path"/"$ee_system_folder"/lib/facebook-platform