<?php
`ssh-agent bash -c 'ssh-add /home1/nitelit1/public_html/gobobuilder-static/.ssh/id_rsa; git fetch --all && git reset --hard origin/master'`;
echo 'DONE';


