<?php

function random_individu($target)
{
    for ($i = 0; $i < strlen($target); $i++) {
        // representasi dari target kedalam bit string
        $present_target[] = chr(random_int(32, 126));
        $individu = implode($present_target);
    }
    return $individu;
};
