#!/usr/bin/env bash

# Exit on error. Append "|| true" if you expect an error.
set -o errexit  # same as -e
# Exit on error inside any functions or subshells.
set -o errtrace
# Do not allow use of undefined vars. Use ${VAR:-} to use an undefined VAR
set -o nounset
# Catch the error in case mysqldump fails (but gzip succeeds) in `mysqldump |gzip`
set -o pipefail

# "args" from main.workflow get append to below call
# these include source, user, $HOST and target
printf -- 'Uploading assets... '

export SSHPASS="$SFTP_PASSWORD"
sshpass -e sftp -oStrictHostKeyChecking=no -oBatchMode=no -b - $SFTP_USER@$SFTP_HOST << !
   cd $REMOTE_PATH
   put -r $GITHUB_WORKSPACE/$LOCAL_PATH
   bye
!

printf -- '\033[32m Deployment successful! \033[0m\n'
printf -- '\n'
