<?php
if (!defined('WFWAF_VERSION')) {
	exit('Access denied');
}
/*
	This file is generated automatically. Any changes made will be lost.
*/

$this->failScores['sqli'] = 100;
$this->failScores['xss'] = 100;
$this->failScores['rce'] = 100;

$this->variables['sqliRegex'] = new wfWAFRuleVariable($this, 'sqliRegex', '/(?:[^\\w<]|\\/\\*\\![0-9]*|^)(?:
@@HOSTNAME|
ALTER|ANALYZE|ASENSITIVE|
BEFORE|BENCHMARK|BETWEEN|BIGINT|BINARY|BLOB|
CALL|CASE|CHANGE|CHAR|CHARACTER|CHAR_LENGTH|COLLATE|COLUMN|CONCAT|CONDITION|CONSTRAINT|CONTINUE|CONVERT|CREATE|CROSS|CURRENT_DATE|CURRENT_TIME|CURRENT_TIMESTAMP|CURRENT_USER|CURSOR|
DATABASE|DATABASES|DAY_HOUR|DAY_MICROSECOND|DAY_MINUTE|DAY_SECOND|DECIMAL|DECLARE|DEFAULT|DELAYED|DELETE|DESCRIBE|DETERMINISTIC|DISTINCT|DISTINCTROW|DOUBLE|DROP|DUAL|DUMPFILE|
EACH|ELSE|ELSEIF|ELT|ENCLOSED|ESCAPED|EXISTS|EXIT|EXPLAIN|EXTRACTVALUE|
FETCH|FLOAT|FLOAT4|FLOAT8|FORCE|FOREIGN|FROM|FULLTEXT|
GRANT|GROUP|HAVING|HEX|HIGH_PRIORITY|HOUR_MICROSECOND|HOUR_MINUTE|HOUR_SECOND|
IFNULL|IGNORE|INDEX|INFILE|INNER|INOUT|INSENSITIVE|INSERT|INTERVAL|ISNULL|ITERATE|
JOIN|KILL|LEADING|LEAVE|LIMIT|LINEAR|LINES|LOAD|LOAD_FILE|LOCALTIME|LOCALTIMESTAMP|LOCK|LONG|LONGBLOB|LONGTEXT|LOOP|LOW_PRIORITY|
MASTER_SSL_VERIFY_SERVER_CERT|MATCH|MAXVALUE|MEDIUMBLOB|MEDIUMINT|MEDIUMTEXT|MID|MIDDLEINT|MINUTE_MICROSECOND|MINUTE_SECOND|MODIFIES|
NATURAL|NO_WRITE_TO_BINLOG|NULL|NUMERIC|OPTION|ORD|ORDER|OUTER|OUTFILE|
PRECISION|PRIMARY|PRIVILEGES|PROCEDURE|PROCESSLIST|PURGE|
RANGE|READ_WRITE|REGEXP|RELEASE|REPEAT|REQUIRE|RESIGNAL|RESTRICT|RETURN|REVOKE|RLIKE|ROLLBACK|
SCHEMA|SCHEMAS|SECOND_MICROSECOND|SELECT|SENSITIVE|SEPARATOR|SHOW|SIGNAL|SLEEP|SMALLINT|SPATIAL|SPECIFIC|SQLEXCEPTION|SQLSTATE|SQLWARNING|SQL_BIG_RESULT|SQL_CALC_FOUND_ROWS|SQL_SMALL_RESULT|STARTING|STRAIGHT_JOIN|SUBSTR|
TABLE|TERMINATED|TINYBLOB|TINYINT|TINYTEXT|TRAILING|TRANSACTION|TRIGGER|
UNDO|UNHEX|UNION|UNLOCK|UNSIGNED|UPDATE|UPDATEXML|USAGE|USING|UTC_DATE|UTC_TIME|UTC_TIMESTAMP|
VALUES|VARBINARY|VARCHAR|VARCHARACTER|VARYING|WHEN|WHERE|WHILE|WRITE|YEAR_MONTH|ZEROFILL)(?=[^\\w]|$)/ix');
$this->variables['xssRegex'] = new wfWAFRuleVariable($this, 'xssRegex', '/(?:
#tags
(?:\\<|\\+ADw\\-|\\xC2\\xBC)(script|iframe|svg|object|embed|applet|link|style|meta|\\/\\/|\\?xml\\-stylesheet)(?:[^\\w]|\\xC2\\xBE)|
#protocols
(?:^|[^\\w])(?:(?:(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:6a|4a)|0*(?:106|74));?|j)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:76|56)|0*(?:118|86));?|v)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)|(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:76|56)|0*(?:118|86));?|v)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:62|42)|0*(?:98|66));?|b)|(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:65|45)|0*(?:101|69));?|e)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:63|43)|0*(?:99|67));?|c)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:6d|4d)|0*(?:109|77));?|m)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)|(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:6c|4c)|0*(?:108|76));?|l)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:69|49)|0*(?:105|73));?|i)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:76|56)|0*(?:118|86));?|v)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:65|45)|0*(?:101|69));?|e))(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:73|53)|0*(?:115|83));?|s)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:63|43)|0*(?:99|67));?|c)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:72|52)|0*(?:114|82));?|r)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:69|49)|0*(?:105|73));?|i)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:70|50)|0*(?:112|80));?|p)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:74|54)|0*(?:116|84));?|t)|(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:6d|4d)|0*(?:109|77));?|m)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:68|48)|0*(?:104|72));?|h)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:74|54)|0*(?:116|84));?|t)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:6d|4d)|0*(?:109|77));?|m)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:6c|4c)|0*(?:108|76));?|l)|(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:6d|4d)|0*(?:109|77));?|m)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:6f|4f)|0*(?:111|79));?|o)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:63|43)|0*(?:99|67));?|c)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:68|48)|0*(?:104|72));?|h)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)|(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:64|44)|0*(?:100|68));?|d)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:74|54)|0*(?:116|84));?|t)(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)(?!(?:&\\#(?:x0*3a|0*58);?|&colon;?|\\:)(?:&\\#(?:x0*(?:69|49)|0*(?:105|73));?|i)(?:&\\#(?:x0*(?:6d|4d)|0*(?:109|77));?|m)(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)(?:&\\#(?:x0*(?:67|47)|0*(?:103|71));?|g)(?:&\\#(?:x0*(?:65|45)|0*(?:101|69));?|e)(?:&\\#(?:x0*2f|0*47);?|\\/)(?:(?:&\\#(?:x0*(?:70|50)|0*(?:112|80));?|p)(?:&\\#(?:x0*(?:6e|4e)|0*(?:110|78));?|n)(?:&\\#(?:x0*(?:67|47)|0*(?:103|71));?|g)|(?:&\\#(?:x0*(?:62|42)|0*(?:98|66));?|b)(?:&\\#(?:x0*(?:6d|4d)|0*(?:109|77));?|m)(?:&\\#(?:x0*(?:70|50)|0*(?:112|80));?|p)|(?:&\\#(?:x0*(?:67|47)|0*(?:103|71));?|g)(?:&\\#(?:x0*(?:69|49)|0*(?:105|73));?|i)(?:&\\#(?:x0*(?:66|46)|0*(?:102|70));?|f)|(?:&\\#(?:x0*(?:70|50)|0*(?:112|80));?|p)?(?:&\\#(?:x0*(?:6a|4a)|0*(?:106|74));?|j)(?:&\\#(?:x0*(?:70|50)|0*(?:112|80));?|p)(?:&\\#(?:x0*(?:65|45)|0*(?:101|69));?|e)(?:&\\#(?:x0*(?:67|47)|0*(?:103|71));?|g)|(?:&\\#(?:x0*(?:74|54)|0*(?:116|84));?|t)(?:&\\#(?:x0*(?:69|49)|0*(?:105|73));?|i)(?:&\\#(?:x0*(?:66|46)|0*(?:102|70));?|f)(?:&\\#(?:x0*(?:66|46)|0*(?:102|70));?|f)|(?:&\\#(?:x0*(?:73|53)|0*(?:115|83));?|s)(?:&\\#(?:x0*(?:76|56)|0*(?:118|86));?|v)(?:&\\#(?:x0*(?:67|47)|0*(?:103|71));?|g)(?:&\\#(?:x0*2b|0*43);?|\\+)(?:&\\#(?:x0*(?:78|58)|0*(?:120|88));?|x)(?:&\\#(?:x0*(?:6d|4d)|0*(?:109|77));?|m)(?:&\\#(?:x0*(?:6c|4c)|0*(?:108|76));?|l))(?:(?:&\\#(?:x0*3b|0*59);?|;)(?:&\\#(?:x0*(?:63|43)|0*(?:99|67));?|c)(?:&\\#(?:x0*(?:68|48)|0*(?:104|72));?|h)(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)(?:&\\#(?:x0*(?:72|52)|0*(?:114|82));?|r)(?:&\\#(?:x0*(?:73|53)|0*(?:115|83));?|s)(?:&\\#(?:x0*(?:65|45)|0*(?:101|69));?|e)(?:&\\#(?:x0*(?:74|54)|0*(?:116|84));?|t)(?:&\\#(?:x0*3d|0*61);?|=)[\\-a-z0-9]+)?(?:(?:&\\#(?:x0*3b|0*59);?|;)(?:&\\#(?:x0*(?:62|42)|0*(?:98|66));?|b)(?:&\\#(?:x0*(?:61|41)|0*(?:97|65));?|a)(?:&\\#(?:x0*(?:73|53)|0*(?:115|83));?|s)(?:&\\#(?:x0*(?:65|45)|0*(?:101|69));?|e)(?:&\\#(?:x0*36|0*54);?|6)(?:&\\#(?:x0*34|0*52);?|4))?(?:&\\#(?:x0*2c|0*44);?|,)))(?:\\s|(?:&\\#(?:x0*(?:9|a|d)|0*(?:9|10|13));?|&Tab;?|&NewLine;?))*(?:&\\#(?:x0*3a|0*58);?|&colon|\\:)|
#css expression
(?:^|[^\\w])(?:(?:\\\\0*65|\\\\0*45|e)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*78|\\\\0*58|x)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*70|\\\\0*50|p)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*72|\\\\0*52|r)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*65|\\\\0*45|e)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*73|\\\\0*53|s)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*73|\\\\0*53|s)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*69|\\\\0*49|i)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*6f|\\\\0*4f|o)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*6e|\\\\0*4e|n))[^\\w]*?(?:\\\\0*28|\\()|
#css properties
(?:^|[^\\w])(?:(?:(?:\\\\0*62|\\\\0*42|b)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*65|\\\\0*45|e)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*68|\\\\0*48|h)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*61|\\\\0*41|a)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*76|\\\\0*56|v)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*69|\\\\0*49|i)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*6f|\\\\0*4f|o)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*72|\\\\0*52|r)(?:\\/\\*.*?\\*\\/)*)|(?:(?:\\\\0*2d|\\\\0*2d|-)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*6d|\\\\0*4d|m)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*6f|\\\\0*4f|o)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*7a|\\\\0*5a|z)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*2d|\\\\0*2d|-)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*62|\\\\0*42|b)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*69|\\\\0*49|i)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*6e|\\\\0*4e|n)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*64|\\\\0*44|d)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*69|\\\\0*49|i)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*6e|\\\\0*4e|n)(?:\\/\\*.*?\\*\\/)*(?:\\\\0*67|\\\\0*47|g)(?:\\/\\*.*?\\*\\/)*))[^\\w]*(?:\\\\0*3a|\\\\0*3a|:)[^\\w]*(?:\\\\0*75|\\\\0*55|u)(?:\\\\0*72|\\\\0*52|r)(?:\\\\0*6c|\\\\0*4c|l)|
#properties
(?:^|[^\\w])(?:on(?:abort|activate|active|addsourcebuffer|addstream|addtrack|afterprint|afterscriptexecute|afterupdate|alerting|animationcancel|animationend|animationiteration|animationstart|antennaavailablechange|appinstalled|audioend|audioprocess|audiostart|autocomplete|autocompleteerror|auxclick|beforeactivate|beforecopy|beforecut|beforedeactivate|beforeeditfocus|beforeinput|beforeinstallprompt|beforepaste|beforeprint|beforescriptexecute|beforeunload|beforeupdate|begin|beginevent|blocked|blur|bounce|boundary|broadcast|busy|cached|callschanged|cancel|canplay|canplaythrough|cardstatechange|cellchange|cfstatechange|change|chargingchange|chargingtimechange|checkboxstatechange|checking|click|close|command|commandupdate|compassneedscalibration|complete|compositionend|compositionstart|compositionupdate|connect|connected|connecting|connectioninfoupdate|contactchange|contextmenu|controllerchange|controlselect|copy|cuechange|currentchannelchanged|currentsourcechanged|cut|data|dataavailable|datachange|datachannel|dataerror|datasetchanged|datasetcomplete|dblclick|deactivate|delivered|deliveryerror|deliverysuccess|devicechange|devicelight|devicemotion|deviceorientation|deviceproximity|dialing|disabled|dischargingtimechange|disconnected|disconnecting|domattrmodified|domcharacterdatamodified|domcontentloaded|dommenuitemactive|dommenuiteminactive|dommousescroll|domnodeinserted|domnodeinsertedintodocument|domnoderemoved|domnoderemovedfromdocument|domsubtreemodified|downloading|drag|dragdrop|dragend|dragenter|dragexit|dragleave|dragover|dragstart|drain|drop|durationchange|eitbroadcasted|emptied|enabled|encrypted|end|ended|endevent|enter|error|errorupdate|exit|failed|fetch|filterchange|finish|focus|focusin|focusout|formchange|forminput|frequencychange|fullscreenchange|fullscreenerror|gamepadconnected|gamepaddisconnected|gesturechange|gestureend|gesturestart|gotpointercapture|hashchange|headphoneschange|held|help|holding|icccardlockerror|iccinfochange|icecandidate|iceconnectionstatechange|icegatheringstatechange|identityresult|idpassertionerror|idpvalidationerror|inactive|incoming|input|install|invalid|isolationchange|keydown|keypress|keystatuschange|keyup|languagechange|layoutcomplete|levelchange|load|loaded|loadeddata|loadedmetadata|loadend|loading|loadingdone|loadingerror|loadstart|localized|losecapture|lostpointercapture|mark|mediacomplete|mediaerror|message|messageerror|midimessage|mousedown|mouseenter|mouseleave|mousemove|mouseout|mouseover|mouseup|mousewheel|move|moveend|movestart|mozaudioavailable|mozbrowseractivitydone|mozbrowserasyncscroll|mozbrowseraudioplaybackchange|mozbrowsercaretstatechanged|mozbrowserclose|mozbrowsercontextmenu|mozbrowserdocumentfirstpaint|mozbrowsererror|mozbrowserfindchange|mozbrowserfirstpaint|mozbrowsericonchange|mozbrowserloadend|mozbrowserloadstart|mozbrowserlocationchange|mozbrowsermanifestchange|mozbrowsermetachange|mozbrowseropensearch|mozbrowseropentab|mozbrowseropenwindow|mozbrowserresize|mozbrowserscroll|mozbrowserscrollareachanged|mozbrowserscrollviewchange|mozbrowsersecuritychange|mozbrowserselectionstatechanged|mozbrowsershowmodalprompt|mozbrowsertitlechange|mozbrowserusernameandpasswordrequired|mozbrowservisibilitychange|mozfullscreenchange|mozfullscreenerror|mozgamepadbuttondown|mozgamepadbuttonup|mozinterruptbegin|mozinterruptend|mozmousepixelscroll|mozorientation|mozpointerlockchange|mozpointerlockerror|mozscrolledareachanged|moztimechange|mscontentzoom|msgesturechange|msgesturedoubletap|msgestureend|msgesturehold|msgesturerestart|msgesturestart|msgesturetap|msgotpointercapture|msinertiastart|mslostpointercapture|msmanipulationstatechanged|mspointercancel|mspointerdown|mspointerenter|mspointerhover|mspointerleave|mspointermove|mspointerout|mspointerover|mspointerup|mute|negotiationneeded|nodecreate|nomatch|notificationclick|noupdate|obsolete|offline|online|open|orientationchange|outofsync|overconstrained|overflow|page|pagehide|pageshow|paste|pause|peeridentity|peerinfoupdat|play|playing|pointercancel|pointerdown|pointerenter|pointerleave|pointerlockchange|pointerlockerror|pointermove|pointerout|pointerover|pointerup|popstate|popuphidden|popuphiding|popupshowing|popupshown|progress|propertychange|push|pushsubscriptionchange|radiostatechange|ratechange|readystatechange|received|rejectionhandled|removesourcebuffer|removestream|removetrack|repeat|repeatevent|reset|resize|resizeend|resizestart|resourcetimingbufferfull|result|resume|resuming|retrieving|reverse|rowdelete|rowenter|rowexit|rowinserted|rowsdelete|rowsinserted|scanningstatechanged|scroll|search|seek|seeked|seeking|select|selectionchange|selectstart|sending|sent|sessionavailable|sessionconnect|settingchange|shippingaddresschange|shippingoptionchange|show|signalingstatechange|slotchange|smartcard|sort|soundend|soundstart|sourceclose|sourceended|sourceopen|speakerforcedchange|speechend|speechstart|stalled|start|started|statechange|statuschange|stkcommand|stksessionend|stop|storage|submit|success|suspend|svgabort|svgerror|svgload|svgresize|svgscroll|svgunload|svgzoom|synchrestored|timeerror|timeout|timer|timeupdate|toggle|tonechange|touchcancel|touchend|touchenter|touchleave|touchmove|touchstart|trackchange|transitioncancel|transitionend|transitionrun|transitionstart|underflow|unhandledrejection|unload|unmute|update|updateend|updatefound|updateready|updatestart|upgradeneeded|urlflip|userproximity|ussdreceived|valuechange|versionchange|visibilitychange|voicechange|voiceschanged|volumechange|vrdisplayactivate|vrdisplayblur|vrdisplayconnect|vrdisplayconnected|vrdisplaydeactivate|vrdisplaydisconnect|vrdisplaydisconnected|vrdisplayfocus|vrdisplaypresentchange|waiting|waitingforkey|webglcontextcreationerror|webglcontextlost|webglcontextrestored|webkitanimationend|webkitanimationiteration|webkitanimationstart|webkitfullscreenchange|webkitfullscreenerror|webkitmouseforcechanged|webkitmouseforcedown|webkitmouseforceup|webkitmouseforcewillbegin|webkittransitionend|webkitwillrevealbottom|wheel|writeend|zoom)|formaction|data\\-bind|ev:event)[^\\w]
)/ix');

$this->blacklistedParams['request.queryString[action]'][] = '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i';
$this->blacklistedParams['request.queryString[img]'][] = '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i';
$this->blacklistedParams['request.body[action]'][] = '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i';
$this->blacklistedParams['request.body[img]'][] = '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i';
$this->blacklistedParams['request.body[nsextt]'][] = '/.*/';
$this->blacklistedParams['request.fileNames[Filedata]'][] = '/\\/uploadify\\.php$/i';
$this->blacklistedParams['request.fileNames[yiw_contact]'][] = '/.*/';
$this->blacklistedParams['request.fileNames[filename]'][] = '/\\/license\\.php$/i';
$this->blacklistedParams['request.fileNames[update_file]'][] = '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php$/i';
$this->blacklistedParams['request.fileNames[Filedata]'][] = '/tiny_mce[\\/]+plugins[\\/]+tinybrowser[\\/]+upload_file\\.php$/i';
$this->blacklistedParams['request.fileNames[upload]'][] = '/elfinder[\\/]+php[\\/]+connector\\.minimal\\.php$/i';

$this->whitelistedParams['request.body[excerpt]'][] = '/.*/';
$this->whitelistedParams['request.body[comment]'][] = array (
  'url' => '/wp-comments-post\\.php$/i',
  'rules' => 
  array (
    0 => '3',
    1 => '12',
    2 => '146',
  ),
);
$this->whitelistedParams['request.body[content]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[data]'][] = array(
'url' => '/\\/wp-admin\\/admin-ajax\\.php$/i',
'rules' => array (
  0 => '9',
),
'conditional' => new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'notMatch', '/^(?:nopriv_)?wpgdprc_process_action$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^(?:nopriv_)?wpgdprc_process_action$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))))
);
$this->whitelistedParams['request.body[params][files]'][] = array (
  'url' => '/\\/wp\\-load\\.php$/i',
  'rules' => 
  array (
    0 => '9',
  ),
);
$this->whitelistedParams['request.queryString[s]'][] = '/\\/wp-admin\\/(?:network\\/)?(?:plugin(?:s|-install)|edit)\\.php$/i';
$this->whitelistedParams['request.body[whitelistedPath]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[whitelistedParam]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[oldWhitelistedPath]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[oldWhitelistedParam]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[newWhitelistedPath]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[newWhitelistedParam]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[bannedURLs]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[scan_include_extra]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[newcontent]'][] = '/\\/wp-admin\\/(?:network\\/)?(?:(?:plugin|theme)-editor|admin-ajax)\\.php$/i';
$this->whitelistedParams['request.body[widget-text]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[widget-custom_html]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.queryString[_wp_http_referer]'][] = '/.{0,1}/';
$this->whitelistedParams['request.body[_wp_http_referer]'][] = array (
  'url' => '/.*/',
  'rules' => 
  array (
    0 => '13',
  ),
);
$this->whitelistedParams['request.queryString[plugin]'][] = '/\\/wp-admin\\/(?:network\\/)?plugins\\.php$/i';
$this->whitelistedParams['request.queryString[action]'][] = '/\\/wp-admin\\/(?:network\\/)?plugins\\.php$/i';
$this->whitelistedParams['request.queryString[checked]'][] = '/\\/wp-admin\\/(?:network\\/)?plugins\\.php$/i';
$this->whitelistedParams['request.body[action]'][] = '/\\/wp-admin\\/(?:network\\/)?plugins\\.php$/i';
$this->whitelistedParams['request.body[checked]'][] = '/\\/wp-admin\\/(?:network\\/)?plugins\\.php$/i';
$this->whitelistedParams['request.body[submit]'][] = '/\\/wp-admin\\/(?:network\\/)?plugins\\.php$/i';
$this->whitelistedParams['request.body[blogname]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[blogdescription]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[siteurl]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[home]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[admin_email]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[moderation_keys]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[blacklist_keys]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[permalink_structure]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[category_base]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[tag_base]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.queryString[s]'][] = '/\\/wp-admin\\/edit-comments\\.php$/i';
$this->whitelistedParams['request.body[log]'][] = '/\\/wp-login\\.php$/i';
$this->whitelistedParams['request.body[pwd]'][] = '/\\/wp-login\\.php$/i';
$this->whitelistedParams['request.body[redirect_to]'][] = '/\\/wp-login\\.php$/i';
$this->whitelistedParams['request.queryString[s]'][] = '/\\/wp-admin\\/network\\/(?:user|site)s\\.php$/i';
$this->whitelistedParams['request.body[blog]'][] = '/\\/wp-admin\\/network\\/site-new\\.php$/i';
$this->whitelistedParams['request.body[deletedWhitelistedPath]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[deletedWhitelistedParam]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[itsec_global][log_location]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[itsec_backup][location]'][] = '/\\/wp-admin\\/options\\.php$/i';
$this->whitelistedParams['request.body[dir]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[sql_query]'][] = '/(?:lint|import)\\.php$/i';
$this->whitelistedParams['request.body[divi_integration_body]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[divi_integration_head]'][] = '/\\/wp-admin\\/admin-ajax\\.php$/i';
$this->whitelistedParams['request.body[fl_builder_data][settings][html]'][] = array(
'url' => '/.*/',
'rules' => array (
  0 => '9',
),
'conditional' => new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIs', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'currentUserIs', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))))
);
$this->whitelistedParams['request.body[partials]'][] = array(
'url' => '/.*/',
'rules' => array (
  0 => '9',
),
'conditional' => new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIs', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))))
);
$this->whitelistedParams['request.body[code]'][] = array(
'url' => '/\\/wp\\-load\\.php$/i',
'rules' => array (
  0 => '3',
),
'conditional' => new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'ZXhlYw', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#^define\\(\\s*\'DONOTCACHEDB\',\\s*true\\s*\\);\\s*if\\s*\\(\\s*function_exists\\(\\s*\'vp_ai_ping_get\'\\s*\\)\\s*\\)\\s*return\\s*vp_ai_ping_get\\(\\);\\s*else\\s*return\\s*\\$this->ai_ping_get\\(\\);$#', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'code',
), array (
)))))))
);
$this->whitelistedParams['request.body[files]'][] = array (
  'url' => '/\\/vp\\-restore\\-helper\\-[a-zA-Z0-9]+\\.php$/i',
  'rules' => 
  array (
    0 => '3',
    1 => '9',
  ),
);
$this->whitelistedParams['request.body[options][modules][ga_code]'][] = array (
  'url' => '#wp\\-admin/+options\\-general.php$#i',
  'rules' => 
  array (
    0 => '9',
  ),
);
$this->whitelistedParams['request.fileNames'][] = array (
  'url' => '#importbuddy\\.php$#i',
  'rules' => 
  array (
    0 => '76',
  ),
);

$this->rules[119] = wfWAFRule::create($this, 119, NULL, 'rce', '100', 'Duplicator Installer wp-config.php Overwrite', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/installer(-backup)?\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', '3', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action_ajax',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[114] = wfWAFRule::create($this, 114, NULL, 'backdoor', '100', 'FB6904-1', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', 'dd2b27de911dc0bffb0731accfb19ef1', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'fb6b8bd57c6b98e7eeeb7df01b99c335',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'fb6b8bd57c6b98e7eeeb7df01b99c335',
), array (
))))));
$this->rules[115] = wfWAFRule::create($this, 115, NULL, 'backdoor', '100', 'FB6904-2', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '36ea527f1f4ea563e43fec711328d6a5', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'e29f37ef46c8a4ce321e40a77efdcaf1',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'e29f37ef46c8a4ce321e40a77efdcaf1',
), array (
))))));
$this->rules[18] = wfWAFRule::create($this, 18, NULL, 'priv-esc', '100', 'User Roles Manager Privilege Escalation <= 4.24', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ure_other_roles',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/(network/)?(profile|user-new)\\.php#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[66] = wfWAFRule::create($this, 66, NULL, 'dos', '100', 'WordPress Core <= 4.5.3 - DoS', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'update-plugin', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/(^|\\/|\\\\|%2f|%5c)\\.\\.(\\\\|\\/|%2f|%5c)/i', array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
))))));
$this->rules[117] = wfWAFRule::create($this, 117, NULL, 'privesc', '100', 'WordPress Core: Arbitrary File Deletion', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/(network/)?post\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'editattachment', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/\\/|\\\\/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'thumb',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'thumb',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[118] = wfWAFRule::create($this, 118, NULL, 'privesc', '100', 'FB7224', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5body',
  1 => 'df988dd464bd288c5031b2a4e27ee33d',
  2 => 'f9e0a9d7c5691dddc0b0927c87e5e615',
  3 => '6f646943810275a17d56a8992dc5bce5',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5body',
  1 => 'df988dd464bd288c5031b2a4e27ee33d',
  2 => '8c7dd922ad47494fc02c388e12c00eac',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[126] = wfWAFRule::create($this, 126, NULL, 'privesc', '100', 'WordPress <= 5.0 - PHP Object Injection via Meta Data & Authenticated File Delete', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp-admin/(network/)?post\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'file',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'meta_input',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'guid',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[1] = wfWAFRule::create($this, 1, NULL, 'whitelist', '100', 'Whitelisted URL', 1, 'allow', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/(network/)?(post|profile|user-new|settings)\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'wordfence_loadLiveTraffic', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'wordfence_ticker', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIs', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'install-plugin', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'update-plugin', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'delete-plugin', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'search-plugins', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'search-install-plugins', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'activate-plugin', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'update-theme', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'delete-theme', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'install-theme', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'customize_save', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
))))))))));
$this->rules[2] = wfWAFRule::create($this, 2, NULL, 'lfi', '100', 'Slider Revolution: Local File Inclusion', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'revslider_show_image', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'nopriv_revslider_show_image', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/\\.php$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'img',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'revslider_show_image', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'nopriv_revslider_show_image', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/\\.php$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'img',
), array (
))))))));
$this->rules[60] = wfWAFRule::create($this, 60, NULL, 'file_upload', '100', 'Slider Revolution: Arbitrary File Upload', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'revslider_ajax_action', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'nopriv_revslider_ajax_action', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'update_plugin', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'client_action',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'revslider_ajax_action', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'nopriv_revslider_ajax_action', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'update_plugin', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'client_action',
), array (
)))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[15] = wfWAFRule::create($this, 15, NULL, 'xss', '100', 'dzs-videogallery 8.80 XSS HTML injection in inline JavaScript', 0, 'blockXSS', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/dzs\\-videogallery[\\/]+admin[\\/]+(?:playlist|tag)seditor[\\/]+popup\\.php/', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'contains', '\'', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'initer',
), array (
))))));
$this->rules[16] = wfWAFRule::create($this, 16, NULL, 'sqli', '100', 'Simple Ads Manager <= 2.9.4.116 - SQL Injection', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/simple-ads-manager[\\/]+sam-ajax-loader\\.php/', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'sqliRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wc',
), array (
  0 => 'base64decode',
))))));
$this->rules[17] = wfWAFRule::create($this, 17, NULL, 'rfi', '100', 'Gwolle Guestbook <= 1.5.3 - Remote File Inclusion', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/gwolle\\-gb[\\/]+frontend[\\/]+captcha[\\/]+ajaxresponse\\.php/', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/.*/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'abspath',
), array (
))))));
$this->rules[20] = wfWAFRule::create($this, 20, NULL, 'auth-bypass', '100', 'WordPress Core <= 4.5.0 - Authentication Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '5c9fefc9f24ecfd74addc2eaff8481fc', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'contributor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))))));
$this->rules[21] = wfWAFRule::create($this, 21, NULL, 'file_upload', '100', 'Ninja Forms <= 2.9.42 - Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'nf_async_upload', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[22] = wfWAFRule::create($this, 22, NULL, 'auth-bypass', '100', 'Ninja Forms <= 2.9.42: Missing Authentication Check', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'nf2to3',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'update_ninja_forms_settings',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ninja_forms',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[23] = wfWAFRule::create($this, 23, NULL, 'auth-bypass', '100', 'Ninja Forms <= 2.9.42: Missing Authentication Check', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'nf2to3',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'nf_export_form',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'nf_export_form',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'nf_import_form', array(wfWAFRuleComparisonSubject::create($this, 'request.fileNames', array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[25] = wfWAFRule::create($this, 25, NULL, 'auth-bypass', '100', 'WP Fastest Cache <= 0.8.5.6 - Authorization Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'wpfc_cdn_template_ajax_request', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[26] = wfWAFRule::create($this, 26, NULL, 'auth-bypass', '100', 'WP Fastest Cache <= 0.8.5.6 - Authorization Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'wpfc_save_cdn_integration_ajax_request', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[27] = wfWAFRule::create($this, 27, NULL, 'xss', '100', 'HDW Player Plugin <= 3.4 - Reflected XSS', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '8fe5104833b48c11b4c6a3e611e3f544', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', 'd2cb1ebf7e72e3749053af2966d8946c', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '2767cc3ede7592a47bd6657e3799565c', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', 'cce3df80f07d36b56db4376a4802d6c2', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
))))))));
$this->rules[28] = wfWAFRule::create($this, 28, NULL, 'sqli', '100', 'Google SEO Pressor Snippet Plugin <= 1.2.6 - SQL Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'remove_seo_snippets', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^[0-9]+$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'post_id',
), array (
))))));
$this->rules[29] = wfWAFRule::create($this, 29, NULL, 'xss', '100', 'WPMain Stored XSS <= 3.1.2', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'mainwp-setup', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[31] = wfWAFRule::create($this, 31, NULL, 'file_upload', '100', 'EWWW Image Optimizer <= 2.8.0 - Remote Command Execution', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ewww_image_optimizer_delay',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'notMatch', '/^\\d+$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ewww_image_optimizer_delay',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ewww_image_optimizer_optipng_level',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^\\d+$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ewww_image_optimizer_optipng_level',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ewww_image_optimizer_pngout_level',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^\\d+$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ewww_image_optimizer_pngout_level',
), array (
))))))));
$this->rules[32] = wfWAFRule::create($this, 32, NULL, 'xss', '100', 'Customize Admin Stored XSS <= 1.6.6', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+options\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^#?[0-9a-f]+$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '9b5354ddf005f69745b19155d2b64725',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '9b5354ddf005f69745b19155d2b64725',
), array (
))))));
$this->rules[33] = wfWAFRule::create($this, 33, NULL, 'sqli', '100', 'Kento Post View Counter SQLi <= 2.8', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '46f5a89acb206a7f58db187e45fa2a4d', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^(?:country|city)$/ix', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '5fc75f82e79d75efb9716109034a3209',
), array (
))))))));
$this->rules[34] = wfWAFRule::create($this, 34, NULL, 'xss', '100', 'Kento Post View Counter Reflected XSS <= 2.8', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', 'b33c30f8f27dd4a25de0da3f7be5afad', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/[^-:0-9]/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '1e3c6aaf636066719ec996aca10b440c',
), array (
))))))));
$this->rules[35] = wfWAFRule::create($this, 35, NULL, 'xss', '100', 'Kento Post View Counter Stored XSS <= 2.8', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'Y', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'kentopvc_hidden',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'notMatch', '/^1?$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'kento_pvc_hide',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'notMatch', '/^1?$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'kento_pvc_uniq',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'xssRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'kento_pvc_today_text',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'xssRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'kento_pvc_total_text',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'xssRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'kento_pvc_numbers_lang',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'notMatch', '/^1?$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'kento_pvc_posttype',
), array (
)))))));
$this->rules[36] = wfWAFRule::create($this, 36, NULL, 'file_upload', '100', 'WP Mobile Detector <= 3.5 - Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-mobile\\-detector[/]+resize\\.php#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '#/wp\\-mobile\\-detector[/]+timthumb\\.php#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'src',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/\\.(?:png|gif|jpg|jpeg|jif|jfif|svg)$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'src',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'src',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/\\.(?:png|gif|jpg|jpeg|jif|jfif|svg)$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'src',
), array (
))))))));
$this->rules[37] = wfWAFRule::create($this, 37, NULL, 'sqli', '100', 'Double Opt-In for Download <= 2.0.9 - SQL Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'id',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^[0-9]+$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'id',
), array (
)))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'populate_download_edit_form', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[38] = wfWAFRule::create($this, 38, NULL, 'sde', '100', 'WP Maintenance Mode <= 2.0.3 - Sensitive Data Exposure', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '9082302c5211de15622f1cfab357f521', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[39] = wfWAFRule::create($this, 39, NULL, 'sde', '100', 'WP Maintenance Mode <= 2.0.3 - Auth Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'wpmm_reset_settings', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[40] = wfWAFRule::create($this, 40, NULL, 'rce', '100', 'WP Maintenance Mode <= 2.0.3 - Remote Code Execution', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#wp\\-admin/+options\\-general.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'wp-maintenance-mode', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/["\\$]/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'options',
  2 => 'modules',
  3 => 'ga_code',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'options',
  2 => 'modules',
  3 => 'ga_code',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', '1', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'options',
  2 => 'modules',
  3 => 'ga_status',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'options',
  2 => 'modules',
  3 => 'ga_status',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'modules', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'tab',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'tab',
), array (
))))));
$this->rules[41] = wfWAFRule::create($this, 41, NULL, 'auth-bypass', '100', 'Robo Gallery <= 2.0.14 - Auth Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'rbs_gallery', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'contributor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[42] = wfWAFRule::create($this, 42, NULL, 'file-download', '100', 'Memphis Documents Library <= 3.4.5 - Unauthenticated Arbitrary File Download', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin[/]+admin\\-ajax\\.php#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '53ce229902e6621b2723cbb0908123f7', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '0c0c8667d3d4f9c86cbc49e0e345e206', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'type',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'type',
), array (
))))));
$this->rules[43] = wfWAFRule::create($this, 43, NULL, 'lfi', '100', 'SEO by SQUIRRLY <= 6.1.0 - Local File Inclusion', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '932d0cf39a5aa4fc1c3faddaf42e8325',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^[0-9]*$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '58f627ddac2040609edf8ccd8c406fef',
), array (
))))));
$this->rules[44] = wfWAFRule::create($this, 44, NULL, 'auth-bypass', '100', 'SEO by SQUIRRLY <= 6.1.0 - Auth Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', 'c12e6c914ed9a7bbeca851684096ac94', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'eadf52d0c96eb78634b8d939a66fb96f', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'affcac9194a01c0146937eac49f5bd9f', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))))));
$this->rules[45] = wfWAFRule::create($this, 45, NULL, 'auth-bypass', '100', 'DELUCKS SEO <= 1.3.9 - Unauthorized Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'dpc_save_settings',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'dpc_save_settings',
), array (
)))))));
$this->rules[46] = wfWAFRule::create($this, 46, NULL, 'auth-bypass', '100', 'WiziApp - All in One mobile suite <= 4.1.2 - Auth Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'wiziapp_plugin_admin_settings_update', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'wiziapp_plugin_upgrade_dismiss', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))))));
$this->rules[47] = wfWAFRule::create($this, 47, NULL, 'priv-esc', '100', 'Profile Builder <= 2.4.0 - Privilege Escalation', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'wck_update_metawppb_manage_fields', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[48] = wfWAFRule::create($this, 48, NULL, 'xss', '100', 'All in One SEO Pack 2.3.6.1 - Persistent XSS', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/Abonti|aggregator|AhrefsBot|asterias|BDCbot|BLEXBot|BuiltBotTough|Bullseye|BunnySlippers|ca\\-crawler|CCBot|Cegbfeieh|CheeseBot|CherryPicker|CopyRightCheck|cosmos|Crescent|discobot|DittoSpyder|DotBot|Download Ninja|EasouSpider|EmailCollector|EmailSiphon|EmailWolf|EroCrawler|Exabot|ExtractorPro|Fasterfox|FeedBooster|Foobot|Genieo|grub\\-client|Harvest|hloader|httplib|HTTrack|humanlinks|ieautodiscovery|InfoNaviRobot|IstellaBot|Java\\/1\\.|JennyBot|k2spider|Kenjin Spider|Keyword Density\\/0\\.9|larbin|LexiBot|libWeb|libwww|LinkextractorPro|linko|LinkScan\\/8\\.1a Unix|LinkWalker|LNSpiderguy|lwp\\-trivial|magpie|Mata Hari|MaxPointCrawler|MegaIndex|Microsoft URL Control|MIIxpc|Mippin|Missigua Locator|Mister PiX|MJ12bot|moget|MSIECrawler|NetAnts|NICErsPRO|Niki\\-Bot|NPBot|Nutch|Offline Explorer|Openfind|panscient\\.com|PHP\\/5\\.\\{|ProPowerBot\\/2\\.14|ProWebWalker|Python\\-urllib|QueryN Metasearch|RepoMonkey|RMA|SemrushBot|SeznamBot|SISTRIX|sitecheck\\.Internetseer\\.com|SiteSnagger|SnapPreviewBot|Sogou|SpankBot|spanner|spbot|Spinn3r|suzuran|Szukacz\\/1\\.4|Teleport|Telesoft|The Intraformant|TheNomad|TightTwatBot|Titan|toCrawl\\/UrlDispatcher|True_Robot|turingos|TurnitinBot|UbiCrawler|UnisterBot|URLy Warning|VCI|WBSearchBot|Web Downloader\\/6\\.9|Web Image Collector|WebAuto|WebBandit|WebCopier|WebEnhancer|WebmasterWorldForumBot|WebReaper|WebSauger|Website Quester|Webster Pro|WebStripper|WebZip|Wotbox|wsr\\-agent|WWW\\-Collector\\-E|Xenu|Zao|Zeus|ZyBORG|coccoc|Incutio|lmspider|memoryBot|SemrushBot|serf|Unknown|uptime files/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'User-Agent',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'xssRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'User-Agent',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/semalt\\.com|kambasoft\\.com|savetubevideo\\.com|buttons\\-for\\-website\\.com|sharebutton\\.net|soundfrost\\.org|srecorder\\.com|softomix\\.com|softomix\\.net|myprintscreen\\.com|joinandplay\\.me|fbfreegifts\\.com|openmediasoft\\.com|zazagames\\.org|extener\\.org|openfrost\\.com|openfrost\\.net|googlsucks\\.com|best\\-seo\\-offer\\.com|buttons\\-for\\-your\\-website\\.com|www\\.Get\\-Free\\-Traffic\\-Now\\.com|best\\-seo\\-solution\\.com|buy\\-cheap\\-online\\.info|site3\\.free\\-share\\-buttons\\.com|webmaster\\-traffic\\.co/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'Referer',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'xssRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'Referer',
), array (
)))))));
$this->rules[49] = wfWAFRule::create($this, 49, NULL, 'xss', '100', 'All in One SEO Pack <= 2.3.7 - Unauthenticated Stored XSS', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/sitemap_.*?<.*?(:?_\\d+)?\\.xml(:?\\.gz)?/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
))))));
$this->rules[50] = wfWAFRule::create($this, 50, NULL, 'auth-bypass', '100', 'Fluid Responsive Slideshow <= 2.2.26 - Unauthorized Content Modification', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'frs_save', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[51] = wfWAFRule::create($this, 51, NULL, 'sde', '100', 'WP Backup <= 1.2 - Sensitive Data Exposure', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '2b63a6d3fd55f80cc3b453fb11a7b538', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[52] = wfWAFRule::create($this, 52, NULL, 'file_upload', '100', 'File Manager <= 3.0.0 - Arbitrary File Upload/Download', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'dfff0a7fa1a55c8c1a4966c19f6da452',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'dfff0a7fa1a55c8c1a4966c19f6da452',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '266e0d3d29830abfe7d4ed98b47966f7', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[53] = wfWAFRule::create($this, 53, NULL, 'file_upload', '100', 'Levo Slideshow <= 2.3 - Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:lvo_admin_head|lvo_add_new_album|lvo_delete_album|reset_albums|save_lvo_settings|lvo_single_image_upload|lvo_resize_image_and_add|lvo_delete_image|lvo_get_albums_table|lvo_get_albums_images_table|activate|deactivate|lvo_get_album|lvo_get_album_images|get_image|lvo_delete_cache|lvo_reorder_image|lvo_reorder_album|lvo_bulk_delete_albums|lvo_bulk_disable_albums|lvo_bulk_enable_albums|delete_image|lvo_bulk_delete_images|lvo_bulk_disable_images|lvo_bulk_enable_images|lvo_disable_album|lvo_enable_album|lvo_disable_image|lvo_enable_image)$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'task',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'task',
), array (
))))));
$this->rules[55] = wfWAFRule::create($this, 55, NULL, 'auth-bypass', '100', 'Form Lightbox <= 2.1 - Unauthenticated Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/form\\-lightbox/ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[56] = wfWAFRule::create($this, 56, NULL, 'auth-bypass', '100', 'WordPress Social Stream <= 1.5.15 - Authenticated Unauthorized Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'dcwss_update', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[57] = wfWAFRule::create($this, 57, NULL, 'priv-esc', '100', 'Ultimate Product Catalogue <= 3.8.1 - Privilege Escalation', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '8c2e1c2817e3de18e2140498bdd4f7fa', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'e12a2417ffbd0ae4010210b596a3f230', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'df33bf68ad0288e1547139e02c1e096b', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'c000b32f92bbd81b6cbbddd101073e54', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'cc61a84091dcc8b9bd6ae35cf48d71ab', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'c80c9038bbb5910385decc276e42061e', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'b81e270701125a0024db04bebdbcfc2a', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '2e563359c1b268da0041c5bf822857a1', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '4ba84dbaaafd4e7d98f55e9f093fe65a', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '1deb089a44f2962f92c678a451e61142', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '6ffa8f3e70a6279866e4b2c16fe18729', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'aa1c4fd7fb193a2cd1b0cc9150131b31', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '91e590bfc230eb3971ef1bb6b97ef974', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'd0e980fd7bc681b3c3085b1ac31024d6', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '069dde6f8ea27c8618cc8f6c6703a7c7', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '819900411c0d5c99c116bbce137ee04b', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '097d5401a3ae688b669f29351b9667de', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '81f1bbc03176c4525b8801b0058b309a', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'a8072b3a87b49ffea18548f35c6abd8c', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '364409901cb1fce968104dce4bf7e4fe', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '246c8343383408c8644f31b1f42617ce', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '66d87c0a0e2c02192c322c61d9d6990a', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '67bfe619d00425b51276ae083ae271a5', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '4aaddae320d8aaa8241ffd22693dd546', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '141f5901534f2b3092be526cac250bb6', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '2b7efaffcb87e027a011c33125585db7', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '979e32726f541a1e568557e9eb6554aa', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'c252a9eb30d304ba6079376ef5231aad', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '75b0967858cf244d4e2654e69b33d2f1', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '9cfad494bbf947c2ce316fe96eac396d', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'a4a148b325f286e07d9f24e3654e2672', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '3863850b63dc41d4e6e8cee097644d18', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '8fb62eed357b03c7be735352ab247bbe', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'a0380a8020e3a09257a6c67a1fe14627', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'b0f145120ec76e700969f63c5af3e8f4', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '52f6fc037a9e97f93309b1115882c080', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'f2a2c32747d2d49ddf682158eb9a510e', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '5caa7c3d6bba5a36798619b0ac4747bb', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'a0793408acebd97af0414d46b6705a65', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'f605a16b247f81f2eb2fdc097e1e1a19', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'ea7348459bf68bf881facb0e5d18ccd7', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'c747677e1903fdfffd4108f3347cf5ab', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '05c0ea3ee2df67b6bc2f3921c3fe2180', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'd986eb29534241e46402c30e678af902', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))))));
$this->rules[58] = wfWAFRule::create($this, 58, NULL, 'file_upload', '100', '360 Product Rotation <= 1.2.1 - Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#includes\\/+plugin\\-media\\-upload\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'contributor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[59] = wfWAFRule::create($this, 59, NULL, 'xss', '100', 'Generic XSS Injection in IP Forwarding Headers', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'xssRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'Client-IP',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'X-Forwarded-For',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'X-Forwarded',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'X-Cluster-Client-IP',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'Forwarded-For',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'Forwarded',
), array (
))))));
$this->rules[61] = wfWAFRule::create($this, 61, NULL, 'sqli', '100', 'User Meta Manager <= 3.4.6 - SQL Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'sqliRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'umm_user',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'umm_user',
), array (
))))));
$this->rules[64] = wfWAFRule::create($this, 64, NULL, 'rce', '100', 'TimThumb <= 2.8.13 - Remote Code Execution', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/(?:timthumb\\.php|img\\.php)/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/[^A-Za-z0-9\\-\\.\\_:\\/\\?\\&\\+\\;\\=]/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'src',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'webshot',
), array (
))))));
$this->rules[63] = wfWAFRule::create($this, 63, NULL, 'rfd', '100', 'TimThumb <= 1.33 - Remote File Download', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/(?:timthumb\\.php|img\\.php)/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '_^[^\\?]+?\\.(?:jpg|jpeg|gif|png)(?:\\?[a-z0-9\\-\\_\\.\\~%\\!\\$&\'\\(\\)\\*\\+,;\\=\\:@\\/\\?]*)?$_iu', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'src',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'src',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthLessThan', '1', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'webshot',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'webshot',
), array (
)))))));
$this->rules[65] = wfWAFRule::create($this, 65, NULL, 'file_upload', '100', 'MailPoet <= 2.6.7 - Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:wysija_)+campaigns/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'themes', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'themeupload', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))))));
$this->rules[69] = wfWAFRule::create($this, 69, NULL, 'file_upload', '100', 'N-Media Post Front-end Form <= 1.0 - Unauthenticated Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?nm_postfront_save_settings$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?nm_postfront_(?:load_post_form|save_post|upload_file)$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '#/plupload[^/]*/+examples/+upload\\.php#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
))))))));
$this->rules[70] = wfWAFRule::create($this, 70, NULL, 'file_upload', '100', 'CYSTEME Finder <= 1.3 - Multiple Unauthenticated Vulnerabilities', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/cysteme\\-finder[^/]*/+php/+connector\\.php#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[71] = wfWAFRule::create($this, 71, NULL, 'file_upload', '100', 'Estatik <= 2.2.5 - Unauthenticated Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?es_prop_media_images$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[72] = wfWAFRule::create($this, 72, NULL, 'lfi', '100', 'Mail Masta <= 1.0 - Unauthenticated Local File Inclusion', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/mail\\-masta/inc/(?:campaign/count_of_send\\.php|lists/csvexport\\.php)$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'notMatch', '/wp\\-load\\.php$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'pl',
), array (
)))))));
$this->rules[74] = wfWAFRule::create($this, 74, NULL, 'auth-bypass', '100', 'Total Security <= 3.3.8 - Unauthenticated Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'fdx_page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[75] = wfWAFRule::create($this, 75, NULL, 'obji', '100', 'Ecwid Ecommerce Shopping Cart <= 4.4.3 - Unauthenticated Object Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/O:\\d+:"(?!stdClass")[^"]+":/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.cookies',
  1 => 'ecwid_oauth_state',
), array (
))))));
$this->rules[68] = wfWAFRule::create($this, 68, NULL, 'file_upload', '100', 'Malicious File Upload (Patterns)', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'filePatternsMatch', '', array(wfWAFRuleComparisonSubject::create($this, 'request.fileNames', array (
))))));
$this->rules[76] = wfWAFRule::create($this, 76, NULL, 'file_upload', '100', 'Malicious File Upload (PHP)', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'fileHasPHP', '', array(wfWAFRuleComparisonSubject::create($this, 'request.fileNames', array (
))))));
$this->rules[77] = wfWAFRule::create($this, 77, NULL, 'priv-esc', '100', 'Advanced Access Manager <= 3.2.1 - Privilege Escalation', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^aamc?$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'sub_action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'sub_action',
), array (
))))));
$this->rules[78] = wfWAFRule::create($this, 78, NULL, 'file_upload', '100', 'BePro Listings <= 2.2.0020 - Unauthenticated Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'notMatch', '/\\.(jpe?g|png|mpeg|mov|flv|pdf|docx?|txt|csv|avi|mp3|wma|wav)($|\\.)/i', array(wfWAFRuleComparisonSubject::create($this, 'request.fileNames', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'save_bepro_listing',
), array (
))))));
$this->rules[80] = wfWAFRule::create($this, 80, NULL, 'xss', '100', 'Master Slider <= 2.7.1 - Reflected XSS', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'master-slider', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', 'master-slider', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'page',
), array (
))))));
$this->rules[81] = wfWAFRule::create($this, 81, NULL, 'xss', '100', 'FancyBox for WordPress <= 3.0.2 - Persistent XSS', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'fancybox-for-wordpress', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'xssRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'mfbfw',
), array (
))))));
$this->rules[83] = wfWAFRule::create($this, 83, NULL, 'file_download', '100', 'Delete All Comments <= 2.0.0 - Unauthenticated Remote File Download', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/delete\\-all\\-comments/delete\\-all\\-comments\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'restorefromfileNAME',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'restorefromfileURL',
), array (
)))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[86] = wfWAFRule::create($this, 86, NULL, 'obji', '100', 'InfiniteWP Client <= 1.6.11 - Unauthenticated Object Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/iwp_action/i', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
  0 => 'base64decode',
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/(^|;|{|})O:+?\\+*[0-9]+:(?!"stdClass")/i', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
  0 => 'base64decode',
))))));
$this->rules[87] = wfWAFRule::create($this, 87, NULL, 'sqli', '100', 'NextGEN Gallery <= 2.1.77 - SQL Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/nggallery/+tags/+.*?%25#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '#/nggallery/+tags/+(?:[^\\$]*\\$|.*?%24)#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
))))));
$this->rules[88] = wfWAFRule::create($this, 88, NULL, 'file_upload', '100', 'Showbiz Pro 1.7.1 - Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'showbiz_ajax_action', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'update_plugin', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'client_action',
), array (
))))));
$this->rules[89] = wfWAFRule::create($this, 89, NULL, 'file_upload', '100', 'Tevolution <= 2.3.6 - Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '#monetize[\\/]+templatic\\-custom_fields[\\/]+single\\-upload\\.php#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
))))));
$this->rules[91] = wfWAFRule::create($this, 91, NULL, 'auth-bypass', '100', 'Newspaper Premium Theme <= 6.7.1 - Privilege Escalation', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?td_ajax_update_panel$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[92] = wfWAFRule::create($this, 92, NULL, 'sqli', '100', 'WP Statistics <= 12.0.7 - Blind SQL Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin\\/admin\\-ajax\\.php$/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/parse\\-media\\-shortcode/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/\\[\\s*?wpstatistics/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'shortcode',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'shortcode',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'contains', '\'', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'shortcode',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'shortcode',
), array (
))))));
$this->rules[93] = wfWAFRule::create($this, 93, NULL, 'lfi', '100', 'Autoptimize <= 2.1.0 - Unauthenticated Local File Inclusion', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#%%(?:COMMENTS|INJECTLATER)%%#', array(wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.body', array (
))))));
$this->rules[94] = wfWAFRule::create($this, 94, NULL, 'file_upload', '100', 'jQuery HTML5 File Upload <= 3.0 - Unauthenticated Options Update and Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/Save\\sSetting/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'savesetting',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/(p(h(p|tml)[0-9]?|l|y)|(j|a)sp|aspx|sh|shtml|html?|cgi|htaccess|ini|exe)/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'accepted_file_types',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/(p(h(p|tml)[0-9]?|l|y)|(j|a)sp|aspx|sh|shtml|html?|cgi|htaccess|ini|exe)/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'inline_file_types',
), array (
)))))));
$this->rules[95] = wfWAFRule::create($this, 95, NULL, 'obji', '100', 'Google Forms <= 0.86 - Unauthenticated Object Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/(^|;|{|})O:+?\\+*[0-9]+:(?!"stdClass")/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wpgform-action',
), array (
  0 => 'base64decode',
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/(^|;|{|})O:+?\\+*[0-9]+:(?!"stdClass")/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wpgform-options',
), array (
  0 => 'base64decode',
))))));
$this->rules[96] = wfWAFRule::create($this, 96, NULL, 'obji', '100', 'Analytics Stats Counter Statistics <= 1.2.2.5 - Unauthenticated Object Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/(^|;|{|})O:+?\\+*[0-9]+:(?!"stdClass")/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wpadm_stat_request',
), array (
  0 => 'base64decode',
))))));
$this->rules[99] = wfWAFRule::create($this, 99, NULL, 'privesc', '100', 'WP Support Plus Responsive Ticket System <= 7.1.3 - Privilege Escalation', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'email',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'loginGuestFacebook', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
))))));
$this->rules[100] = wfWAFRule::create($this, 100, NULL, 'sqli', '100', 'RegistrationMagic-Custom Registration Forms <= 3.7.9.1 - SQL injection', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '198aabe4bd99c673ae7afe8ebc4ed5e9', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'b5005a70ff75a19720c2d62fe51232f9', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', 'f36aaae8c410d611c8e1059ad09986cd', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '2570a32b634e95219aa02d322443bcad',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'c75595cec687b4406b8db2b0073cf699',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/[^0-9\\.\\-]/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'fa597891da1abd2430fc0feb813bf33e',
), array (
))))));
$this->rules[101] = wfWAFRule::create($this, 101, NULL, 'obji', '100', 'Flickr Gallery <= 1.5.2 - Object Injection', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', 'a7462a4310fe32822cc2ce445865649c', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/(^|;|{|})O:+?\\+*[0-9]+:(?!"(?:stdClass|phpFlickr_pager)")/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'pager',
), array (
))))));
$this->rules[102] = wfWAFRule::create($this, 102, NULL, 'obji', '100', 'Appointments <= 2.2.1 - Object Injection', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/(^|;|{|})O:+?\\+*[0-9]+:(?!"(?:stdClass)")/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.cookies',
  1 => 'wpmudev_appointments',
), array (
))))));
$this->rules[104] = wfWAFRule::create($this, 104, NULL, 'sqli', '100', 'Ultimate Form Builder Lite <= 1.3.6 - SQLi -> RCE via Obji', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', 'da6c71b8bb99069bd8e2fde83d95cf0d', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '144e471fa0e0005b146b3f10ed5f8192', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/=form_id&/i', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/3a2257505f5468656d6522/i', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
))))));
$this->rules[105] = wfWAFRule::create($this, 105, NULL, 'sqli', '100', 'Ultimate Form Builder Lite <= 1.3.6 - SQLi -> RCE via Obji', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', 'da6c71b8bb99069bd8e2fde83d95cf0d', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '144e471fa0e0005b146b3f10ed5f8192', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/(?:^|&)(?:f|%66)(?:o|%6f)(?:r|%72)(?:m|%6d)(?:_|%5f)(?:d|%64)(?:a|%61)(?:t|%74)(?:a|%61)(?:\\[|%5b)(.+?)(?:\\]|%5d)(?:\\[|%5b)(?:n|%6e)(?:a|%61)(?:m|%6d)(?:e|%65)(?:\\]|%5d)=(?:f|%66)(?:o|%6f)(?:r|%72)(?:m|%6d)(?:_|%5f)(?:i|%69)(?:d|%64)&.*?(?:f|%66)(?:o|%6f)(?:r|%72)(?:m|%6d)(?:_|%5f)(?:d|%64)(?:a|%61)(?:t|%74)(?:a|%61)(?:\\[|%5b)\\1(?:\\]|%5d)(?:\\[|%5b)(?:v|%76)(?:a|%61)(?:l|%6c)(?:u|%75)(?:e|%65)(?:\\]|%5d)=\\d*[^\\d&]+/i', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/(?:^|&)(?:f|%66)(?:o|%6f)(?:r|%72)(?:m|%6d)(?:_|%5f)(?:d|%64)(?:a|%61)(?:t|%74)(?:a|%61)(?:\\[|%5b)(.+?)(?:\\]|%5d)(?:\\[|%5b)(?:v|%76)(?:a|%61)(?:l|%6c)(?:u|%75)(?:e|%65)(?:\\]|%5d)=\\d*[^\\d&]+[^&]*&.*?(?:f|%66)(?:o|%6f)(?:r|%72)(?:m|%6d)(?:_|%5f)(?:d|%64)(?:a|%61)(?:t|%74)(?:a|%61)(?:\\[|%5b)\\1(?:\\]|%5d)(?:\\[|%5b)(?:n|%6e)(?:a|%61)(?:m|%6d)(?:e|%65)(?:\\]|%5d)=(?:f|%66)(?:o|%6f)(?:r|%72)(?:m|%6d)(?:_|%5f)(?:i|%69)(?:d|%64)(?:$|&)/i', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
)))))));
$this->rules[106] = wfWAFRule::create($this, 106, NULL, 'auth-bypass', '100', 'UserPro - User Profiles with Social Login <= 4.9.17 - Authentication Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'true', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'up_auto_log',
), array (
))))));
$this->rules[107] = wfWAFRule::create($this, 107, NULL, 'auth-bypass', '100', 'Formidable Forms <= 2.05.03 - Multiple Vulnerabilities', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-admin/admin\\-ajax\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'before_html',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'before_html',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'after_html',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'after_html',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?frm_forms_preview$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[108] = wfWAFRule::create($this, 108, NULL, 'spam', '100', 'XRumer/XEvil Spam', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'contributor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'matchCount', '/This\\s+message\\s+is\\s+posted\\s+here\\s+using\\s+XRumer/i', array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
))))));
$this->rules[109] = wfWAFRule::create($this, 109, NULL, 'backdoor', '100', 'Captcha <= 4.4.4 - Auth bypass and backdoor', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '73b3ebd2a14db9cb079d55fd1462ffdc', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '70b29c4920daf4e51e8175179027e668',
), array (
))))));
$this->rules[110] = wfWAFRule::create($this, 110, NULL, 'auth-bypass', '100', 'Captcha <= 4.4.4 - Auth bypass and backdoor', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/plugin-update\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', 'a6105c0a611b41b08f1209506350279e', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '73b3ebd2a14db9cb079d55fd1462ffdc',
), array (
))))));
$this->rules[111] = wfWAFRule::create($this, 111, NULL, 'backdoor', '100', 'Captcha <= 4.4.4 - Auth bypass and backdoor', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '73b3ebd2a14db9cb079d55fd1462ffdc', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '5f963373b673f6b4f9d95d5616c404aa',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '73b3ebd2a14db9cb079d55fd1462ffdc', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '41b2003e2d5c44e8c2829dcad3b85c0a',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '73b3ebd2a14db9cb079d55fd1462ffdc', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'ab5b6f32db34ee099f633e69fea35248',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '73b3ebd2a14db9cb079d55fd1462ffdc', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '9097db90ade3df959df94eb6447234dd',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '73b3ebd2a14db9cb079d55fd1462ffdc', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '4a2a5d2c915a153376ed3010acc75a5a',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '73b3ebd2a14db9cb079d55fd1462ffdc', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '1cae76951490f03f046be773e275cfd1',
), array (
))))));
$this->rules[112] = wfWAFRule::create($this, 112, NULL, 'auth-bypass', '100', ' Super Socializer <= 7.10.6 - Authentication Bypass', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'the_champ_user_auth', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'security',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'security',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'profileData',
  2 => 'email',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'profileData',
  2 => 'email',
), array (
))))));
$this->rules[113] = wfWAFRule::create($this, 113, NULL, 'obji', '100', 'WP Support Plus Responsive Ticket System <= 9.0.2 - Object injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'matchCount', '/(^|;|{|})O:+?\\+*[0-9]+:"WP_Theme"/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.cookies',
  1 => 'wpsp_user_session',
), array (
  0 => 'base64decode',
))))));
$this->rules[121] = wfWAFRule::create($this, 121, NULL, 'auth-bypass', '100', 'Accelerated Mobile Pages <= 0.9.97.19 - Missing Authentication Checks', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin\\/admin\\-ajax\\.php$/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/^(ampforwp_(save_installer|get_licence_activate_update|deactivate_license|enable_modules_upgread))$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/^((amppb_(color_picker|textEditor|export_layout_data|save_layout_data))|enable_amp_pagebuilder|ampforwp_(get_image|icons_list_format))$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'contributor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'notEquals', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'use_amp_pagebuilder',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'ramppb',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'ampforwp_custom_content_editor',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'ampforwp_custom_content_editor_checkbox',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ampforwp-amp-on-off',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ampforwp-ia-on-off',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'ampforwp-redirection-on-off',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'contributor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))))));
$this->rules[137] = wfWAFRule::create($this, 137, NULL, 'auth-bypass', '100', 'Related Posts <= 5.12.90 - Missing Authentication', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/^yuzo_related_post/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'name_options',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'save_options',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'save_options',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'reset_options',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'reset_options',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[138] = wfWAFRule::create($this, 138, NULL, 'privesc', '100', 'Yellow Pencil Visual Theme Customizer <= 7.1.9 Arbitrary Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'yp_remote_get',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'yp_remote_get',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[139] = wfWAFRule::create($this, 139, NULL, 'auth-bypass', '100', 'ARI-Adminer <= 1.1.14: Missing Auth Check', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/(a|%61|%41)(r|%72|%52)(i|%69|%49)(\\-|%2d)(a|%61|%41)(d|%64|%44)(m|%6d|%4D)(i|%69|%49)(n|%6e|%4E)(e|%65|%45)(r|%72|%52)/#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[140] = wfWAFRule::create($this, 140, NULL, 'rce', '100', 'WAF-RULE-140', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '49477a8d7cf7b0a69df4aece24f5453f',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '0c8e91156c85449ebda7234a2e357cc1',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'cd4fdb546b7b0674fce6c4b0bc27b7f4',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'f4bd3746a1b566e14ba0adb68f06f4b9',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '49477a8d7cf7b0a69df4aece24f5453f',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '0c8e91156c85449ebda7234a2e357cc1',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'cd4fdb546b7b0674fce6c4b0bc27b7f4',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'f4bd3746a1b566e14ba0adb68f06f4b9',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[141] = wfWAFRule::create($this, 141, NULL, 'privesc', '100', 'WAF-RULE-141', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '919055bea493cd888269b56250cba665', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[142] = wfWAFRule::create($this, 142, NULL, 'auth-bypass', '100', 'WooCommerce User Email Verification <= 3.3.0 - Unauthenticated Arbitrary Options Update', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wuev_form_type',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[144] = wfWAFRule::create($this, 144, NULL, 'auth-bypass', '100', 'WooCommerce Checkout Manager <= 4.2.6 - Unauthenticated Media Deletion', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'update_attachment_wccm', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'wooccm_front_enduploadsave', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'remove',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'remove',
), array (
)))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[145] = wfWAFRule::create($this, 145, NULL, 'xss', '100', 'Blog Designer <= 1.8.10 - Unauthenticated Stored Cross-Site Scripting', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'custom_css',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'custom_css',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'blog_page_display',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'identical', 'save', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'identical', 'true', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'updated',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'updated',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[147] = wfWAFRule::create($this, 147, NULL, 'xss', '100', 'WP Live Chat Support <= 8.0.28 - Unauthenticated Stored Cross-Site Scripting', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wplc_save_settings',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wplc_save_settings',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wplc_custom_css',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wplc_custom_css',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wplc_custom_js',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wplc_custom_js',
), array (
)))))));
$this->rules[148] = wfWAFRule::create($this, 148, NULL, 'auth-bypass', '100', 'WPGraphQL <= 0.2.3 - Multiple Vulnerable Actions', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/application\\/json/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'Content-Type',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/\\/graphql/', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^\\s*\\{\\s*"query"/', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\{\\s*(plugins|themes|mediaItems|users|comments|posts|pages)/', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/mutation\\s*\\{\\s*registerUser.*?roles:/s', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[149] = wfWAFRule::create($this, 149, NULL, 'privesc', '100', 'WAF-RULE-149', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', '7e978ce09187339eb687db73fa4af779', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(administrator|editor|shop_manager|author)$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'b40a9b4758686946978ccfc290f5cd4b',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[153] = wfWAFRule::create($this, 153, NULL, 'rce', '100', 'WAF-RULE-153', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'md5Equals', 'cb26e9d5bd6311e7d4a759ac8c38d9d0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '5ebeb6065f64f2346dbb00ab789cf001',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'c13367945d5d4c91047b3b50234aa7ab',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[154] = wfWAFRule::create($this, 154, NULL, 'privesc', '100', 'Hybrid Composer <= 1.4.5 - Unauthenticated Options Update', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'equals', 'hc_ajax_save_option', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[151] = wfWAFRule::create($this, 151, NULL, 'privesc', '100', 'File Manager <= 4.8 - Privilege Escalation, SQL Injection, File Deletion', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '#^mk_file_manager_(backup_remove|single_backup_remove|single_backup_logs|single_backup_restore)$#i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[152] = wfWAFRule::create($this, 152, NULL, 'backdoor', '100', 'WAF-RULE-152', 0, 'log', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/^[0-9a-f]{32}$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '5f4dcc3b5aa765d61d8327deb882cf99',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '5f4dcc3b5aa765d61d8327deb882cf99',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '808ad1ac54d3a5e6ab09ed69c2a6605d', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '84a1c9137ae2863590475c6c385b92d7', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '0ebbe8a2b6999ec31f44118f5396e3f3', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '770209dbd19d2cd3da20a08cb138036e', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'd480834a6c46e6e0778d0c863a010667', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '9a2f516318cdf6712d01150110b590b8', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))))));
$this->rules[155] = wfWAFRule::create($this, 155, NULL, 'auth-bypass', '100', 'NicDark Plugins (nd-booking, nd-shortcodes) Unauthenticated Arbitrary Options Update', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '#^(?:nopriv_)?nd_[^_]+_import_settings_php_function#i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[156] = wfWAFRule::create($this, 156, NULL, 'file_upload', '100', 'Woody Ad Snippets <= 2.2.4 - Unauthenticated File Upload/Stored XSS/RCE', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.files',
  1 => 'wbcr_inp_import_files',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[157] = wfWAFRule::create($this, 157, NULL, 'auth-bypass', '100', 'Login or Logout Menu Item <= 1.1.1 - Unauthenticated Settings Update', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'lolmi_settings_submit',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'lolmi_settings_submit',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[158] = wfWAFRule::create($this, 158, NULL, 'xss', '100', 'WP Mega Menu <= 1.3.0 Unauthenticated Settings Update/XSS', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wpmm_theme_type',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'export_wpmm_theme', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[159] = wfWAFRule::create($this, 159, NULL, 'file_upload', '100', 'Simple 301 Redirects Addon – Bulk Uploader <= 1.2.5 - Multiple vulnerabilities', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'submit_bulk_301',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'submit_bulk_301',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'bulk301clearlist', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'equals', 'bulk301export', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[160] = wfWAFRule::create($this, 160, NULL, 'file_upload', '100', 'Ultimate FAQ <= 1.8.24 File Upload Vulnerability', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'EWD_UFAQ_ImportFaqsFromSpreadsheet', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'Action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'Action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[161] = wfWAFRule::create($this, 161, NULL, 'auth-bypass', '100', 'WP Private Content Plus <= 1.31 Unauthenticated Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wppcp_tab',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[150] = wfWAFRule::create($this, 150, NULL, 'bypass', '100', 'Generic X-Forwarded-For Injection', 0, 'log', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/[^0-9a-fA-F.:,\\s]/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'X-Forwarded-For',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[103] = wfWAFRule::create($this, 103, NULL, 'obji', '100', 'PHP Object Injection', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'matchCount', '/(^|;|{|})O:+?\\+*[0-9]+:"WP_Theme"/i', array(wfWAFRuleComparisonSubject::create($this, 'request.headers', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.cookies', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
))))));
$this->rules[3] = wfWAFRule::create($this, 3, NULL, 'sqli', '40', 'SQL Injection', 1, 'failSQLi', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'matchCount', new wfWAFRuleVariable($this, 'sqliRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
))))));
$this->rules[9] = wfWAFRule::create($this, 9, NULL, 'xss', '100', 'XSS: Cross Site Scripting', 1, 'failXSS', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'matchCount', new wfWAFRuleVariable($this, 'xssRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
))))));
$this->rules[11] = wfWAFRule::create($this, 11, NULL, 'file_upload', '100', 'Malicious File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\.(p(h(p|tml)[0-9]?|l|y)|(j|a)sp|aspx|sh|shtml|html?|cgi|htaccess|user\\.ini)($|\\.)/i', array(wfWAFRuleComparisonSubject::create($this, 'request.fileNames', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[67] = wfWAFRule::create($this, 67, NULL, 'lfi', '100', 'Directory Traversal - wp-config.php', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/(^|\\/|\\\\)(\\.\\.?(\\\\|\\/)+)+wp\\-config\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[12] = wfWAFRule::create($this, 12, NULL, 'lfi', '100', 'Directory Traversal', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/(^|\\/|\\\\)\\.\\.(\\\\|\\/)/', array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[13] = wfWAFRule::create($this, 13, NULL, 'lfi', '100', 'LFI: Local File Inclusion', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/^\\/(?:\\.\\/)*(?:var|home|usr|mnt|media|etc|tmp|dev|proc)\\//i', array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[14] = wfWAFRule::create($this, 14, NULL, 'xxe', '100', 'XXE: External Entity Expansion', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/<\\!(?:DOCTYPE|ENTITY)\\s+(?:%\\s*)?\\w+\\s+SYSTEM/i', array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
))))));
$this->rules[146] = wfWAFRule::create($this, 146, NULL, 'rce', '100', 'PHAR Deserialization Attack', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/phar:\\/\\//i', array(wfWAFRuleComparisonSubject::create($this, 'request.body', array (
)),
wfWAFRuleComparisonSubject::create($this, 'request.queryString', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[120] = wfWAFRule::create($this, 120, NULL, 'privesc', '100', 'WP GDPR Compliance <= 1.4.2 - Update Any Option / Call Any Action', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?wpgdprc_process_action$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^\\{[\'"]type[\'"]:[\'"]access_request[\'"],\\s?[\'"]email[\'"]:[\'"][^\'"]+[\'"],\\s?[\'"]consent[\'"]:(true|false)\\}$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'data',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[122] = wfWAFRule::create($this, 122, NULL, 'privesc', '100', 'Kiwi Social Share <= 2.0.10 - Unauthenticated Update Any Option', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?kiwi_social_share_set_option$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[123] = wfWAFRule::create($this, 123, NULL, 'sde', '100', 'Kiwi Social Share <= 2.0.10 - Unauthenticated Read Any Option', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?kiwi_social_share_get_option$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))))));
$this->rules[124] = wfWAFRule::create($this, 124, NULL, 'privesc', '100', 'Toolset Types <= 2.3.3 - Update Arbitrary Usermeta', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/^(?:wp_capabilities|wp_user_level|session_tokens|source_domain|primary_blog)$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'wp_screen_options',
  2 => 'option',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[125] = wfWAFRule::create($this, 125, NULL, 'auth-bypass', '100', 'Orbit Fox by ThemeIsle <= 2.6.3 - Improper REST Capabilities Checks', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/wp-json[\\/]+templates-directory[\\/]+import_elementor/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/templates-directory[\\/]+import_elementor/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'rest_route',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'rest_route',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[128] = wfWAFRule::create($this, 128, NULL, 'xss', '100', 'WordPress <= 5.0 - Contributor+ Potential Stored XSS', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIs', 'contributor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'currentUserIs', 'author', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '#/wp\\-comments\\-post\\.php$#i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '#<form\\W#i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'comment',
), array (
))))));
$this->rules[129] = wfWAFRule::create($this, 129, NULL, 'privesc', '100', 'Total Donations (all known versions) - Multiple Unauthenticated AJAX Actions', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/the-ajax-caller\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(nopriv_)?miglaA?_/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?miglaA?_(?:add_(?:amount|options|offline_backend)|change_donation|constantcontact_test|delete_(?:postmeta|mform)|export_report|form_bgcolor|get(?:OffDonation|me(?:_array)?|_(?:option|postmeta))|mailchimp_(?:getlists|test)|new_(?:mform|mCampaignCreator)|purgeCache|remove_(?:donation|options)|report|reset_(?:c?form|theme)|retrieve_cc_lists|save_(?:option|campaign(?:_creator)?)|stripe_(?:add(?:Basic)?|get|delete)Plan|syncPlan|test_(?:email|hEmail|offline_email|constant_contact)|update(?:Undesignated|_(?:me|barinfo|c?form|me(?:tadata)?|arr|us|recurring_plans|report|postmeta)))$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
))))));
$this->rules[130] = wfWAFRule::create($this, 130, NULL, 'bypass', '100', 'UserPro < 4.9.21 - User Registration Privilege Escalation', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^userpro_process_form$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/(?:^|&)((?:f|%66)(?:o|%6f)(?:r|%72)(?:m|%6d)(?:_|%5f))?(?:r|%72)(?:o|%6f)(?:l|%6c)(?:e|%65)(?:(?:-|%2d).+)?=(?:(?:a|%61)(?:d|%64)(?:m|%6d)(?:i|%69)(?:n|%6e)(?:i|%69)(?:s|%73)(?:t|%74)(?:r|%72)(?:a|%61)(?:t|%74)(?:o|%6f)(?:r|%72)|(?:e|%65)(?:d|%64)(?:i|%69)(?:t|%74)(?:o|%6f)(?:r|%72)|(?:s|%73)(?:h|%68)(?:o|%6f)(?:p|%70)(?:_|%5f)(?:m|%6d)(?:a|%61)(?:n|%6e)(?:a|%61)(?:g|%67)(?:e|%65)(?:r|%72))/i', array(wfWAFRuleComparisonSubject::create($this, 'request.rawBody', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[131] = wfWAFRule::create($this, 131, NULL, 'privesc', '100', 'Simple Social Buttons < 2.0.22 - Arbitrary Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^ssb_import$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[132] = wfWAFRule::create($this, 132, NULL, 'privesc', '100', 'Freemius SDK < 2.2.2 - Authenticated Arbitrary Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^fs_set_db_option$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[133] = wfWAFRule::create($this, 133, NULL, 'lfi', '100', 'WP Fastest Cache <= 0.8.9.0  - Unauthenticated Arbitrary Directory Deletion', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^postratings$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/(^|\\/|\\\\)\\.\\.(\\\\|\\/)/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.headers',
  1 => 'Referer',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[134] = wfWAFRule::create($this, 134, NULL, 'auth-bypass', '100', 'Siteground Optimizer <= 5.0.12 - Improper REST capabilities checks', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/wp-json[\\/]+siteground-optimizer[\\/]+v1/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/siteground-optimizer[\\/]+v1/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'rest_route',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'rest_route',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[135] = wfWAFRule::create($this, 135, NULL, 'privesc', '100', 'Easy WP SMTP <= 1.3.9 - Unauthenticated AJAX actions', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'swpsmtp_import_settings',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^swpsmtp_(clear_log|self_destruct)$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[136] = wfWAFRule::create($this, 136, NULL, 'xss', '100', 'Social Warfare <= 3.5.2 - Unauthenticated Stored Cross-Site Scripting', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'swp_url',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[162] = wfWAFRule::create($this, 162, NULL, 'xss', '100', 'Bold Page Builder <= 2.3.1 - Unauthenticated Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^(?:nopriv_)?bt_bb_save_custom_css$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'currentUserIsNot', 'editor', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
)))))));
$this->rules[163] = wfWAFRule::create($this, 163, NULL, 'auth-bypass', '100', 'WAF-RULE-163', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '0ae56c7098340a973151232bd90ef954',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', 'forms', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '0ae56c7098340a973151232bd90ef954',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^[0-9a-fA-F]{32}$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '3c6e0b8a9c15224a8228b9a98ca1531d',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[164] = wfWAFRule::create($this, 164, NULL, 'auth-bypass', '100', 'WAF-RULE-164', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'ce7c9ce58308d0e1a422a3aa75e0a4f6',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/wp\\-config\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'ce7c9ce58308d0e1a422a3aa75e0a4f6',
), array (
))))));
$this->rules[165] = wfWAFRule::create($this, 165, NULL, 'auth-bypass', '100', 'LifterLMS <= 3.34.5 - Unauthenticated options update', 0, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.files',
  1 => 'llms_import',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[166] = wfWAFRule::create($this, 166, NULL, 'redirect', '100', 'Qode Instagram Widget <= 2.0.1 - Unauthenticated Open Redirect', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/qode-instagram-widget\\/lib\\/instagram-redirect\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
))))));
$this->rules[167] = wfWAFRule::create($this, 167, NULL, 'auth-bypass', '100', 'Motors – Car Dealer & Classified Ads <= 1.4.0 - Multiple Options Update vulnerabilities', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.files',
  1 => 'import_settings',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'export_settings',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'export_settings',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/^stm_ajax_(file_)?automanager/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'match', '/stm_listings_.+option/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'stm_xml_do_import_automanager',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'stm_xml_do_import_automanager',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[168] = wfWAFRule::create($this, 168, NULL, 'auth-bypass', '100', 'Advanced AJAX Product Filters <= 1.3.5', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'equals', 'br-aapf-setup', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'page',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[170] = wfWAFRule::create($this, 170, NULL, 'auth-bypass', '100', 'WAF-RULE-170', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '535563d2fe010e377d91a08df7bd24b0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '3ac340832f29c11538fbe2d6f75e8bcc',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', 'd723bd8fe120d9b9501b59dbdbbd862e', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '3ac340832f29c11538fbe2d6f75e8bcc',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '820b1f6a2f4f02db8d34dda2c54c495c', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '3ac340832f29c11538fbe2d6f75e8bcc',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[171] = wfWAFRule::create($this, 171, NULL, 'file_upload', '100', 'Theme Editor <= 2.1 - Authenticated Arbitrary File Upload', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/wp\\-admin[\\/]+admin\\-ajax\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', '/^webphoto_upload$/i', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.body',
  1 => 'action',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'action',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[172] = wfWAFRule::create($this, 172, NULL, 'xss', '100', 'WAF-RULE-172', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '0e96cee26df98f4f879c7cb49c39f3c0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[174] = wfWAFRule::create($this, 174, NULL, 'auth-bypass', '100', 'WAF-RULE-174', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'f5bc9502d581b68aff5f7d9a63575099',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', 'products', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'f5bc9502d581b68aff5f7d9a63575099',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^[0-9a-fA-F]{32}$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '3c6e0b8a9c15224a8228b9a98ca1531d',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[175] = wfWAFRule::create($this, 175, NULL, 'auth-bypass', '100', 'WAF-RULE-175', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '44ab23917fba3cefa2a2371eff2be8ba',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notEquals', 'properties', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '44ab23917fba3cefa2a2371eff2be8ba',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'notMatch', '/^[0-9a-fA-F]{32}$/', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '3c6e0b8a9c15224a8228b9a98ca1531d',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[176] = wfWAFRule::create($this, 176, NULL, 'xss', '100', 'WP Shopify <= 2.0.4 Stored XSS', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '#/wp\\-json/wpshopify/v1/settings#i', array(wfWAFRuleComparisonSubject::create($this, 'request.path', array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[177] = wfWAFRule::create($this, 177, NULL, 'file-download', '100', 'WAF-RULE-177', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '9acb44549b41563697bb490144ec6258',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '9acb44549b41563697bb490144ec6258',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => 'e98d2f001da5678b39482efbdf5770dc',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => 'e98d2f001da5678b39482efbdf5770dc',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[179] = wfWAFRule::create($this, 179, NULL, 'bypass', '100', 'WAF-RULE-179', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '24be2a598b291f85f33806d203026c37', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[181] = wfWAFRule::create($this, 181, NULL, 'sqli', '100', 'WAF-RULE-181', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '7cef8a734855777c2a9d0caf42666e69', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '12470fe406d44017d96eab37dd65fc14',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '12470fe406d44017d96eab37dd65fc14',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'md5Equals', '467bf20fa851db25bb2fefe3328a1947', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '12470fe406d44017d96eab37dd65fc14',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '12470fe406d44017d96eab37dd65fc14',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'match', new wfWAFRuleVariable($this, 'sqliRegex', NULL), array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '0800fc577294c34e0b28ad2839435945',
), array (
  0 => 'base64decode',
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '0800fc577294c34e0b28ad2839435945',
), array (
  0 => 'base64decode',
))))));
$this->rules[182] = wfWAFRule::create($this, 182, NULL, 'auth-bypass', '100', 'WAF-RULE-182', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'md5Equals', '4fd3f28c184ae3daa6f186652fb99e5b', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5QueryString',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)),
wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.md5Body',
  1 => '418c5509e2171d55b0aee5c2ea4442b5',
), array (
)))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
$this->rules[184] = wfWAFRule::create($this, 184, NULL, 'redirect', '100', 'Qode Twitter Feed <= 2.0.1 - Unauthenticated Open Redirect', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'match', '/\\/qode-twitter-feed\\/lib\\/twitter-redirect\\.php/i', array(wfWAFRuleComparisonSubject::create($this, 'server.script_filename', array (
))))));
$this->rules[185] = wfWAFRule::create($this, 185, NULL, 'auth-bypass', '100', 'Give WP <= 2.5.9 - Unauthenticated Options Update', 1, 'block', new wfWAFRuleComparisonGroup(new wfWAFRuleComparisonGroup(new wfWAFRuleComparison($this, 'identical', '', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'stripe_publishable_key',
), array (
)))), new wfWAFRuleLogicalOperator('OR'), new wfWAFRuleComparison($this, 'lengthGreaterThan', '0', array(wfWAFRuleComparisonSubject::create($this, array (
  0 => 'request.queryString',
  1 => 'stripe_publishable_key',
), array (
))))), new wfWAFRuleLogicalOperator('AND'), new wfWAFRuleComparison($this, 'currentUserIsNot', 'administrator', array(wfWAFRuleComparisonSubject::create($this, 'server.empty', array (
))))));
?>