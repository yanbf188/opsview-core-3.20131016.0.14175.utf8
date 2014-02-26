; <?php return 1; ?>
; the line above is to prevent
; viewing this file from web.
; DON'T REMOVE IT!

; ----------------------------
; Default NagVis Configuration File
; At delivery everything here is commented out. The default values are set in the NagVis code.
; You can make your changes here, they'll overwrite the default settings.
; ----------------------------

; ----------------------------
; !!! The sections/variables with a leading ";" won't be recognized by NagVis (commented out) !!!
; ----------------------------

; General options which affect the whole NagVis installation
[global]
; Dateformat of the time/dates shown in nagvis (For valid format see PHP docs)
;dateformat="Y-m-d H:i:s"
; Select language (Available by default: en_US, de_DE, fr_FR, pt_BR)
;language="en_US"
; Refresh time of pages
;refreshtime=60

; Path definitions
[paths]
; absolute physical NagVis path
base="/usr/local/nagios/nagvis/"
; absolute html NagVis path
; The next value will be regenerated by nagconfgen
htmlbase="/nagvis"
; The next value will be regenerated by nagconfgen
; absolute html NagVis cgi path
htmlcgi="/cgi-bin"
; The next value will be regenerated by nagconfgen
; Used for opsview redirections
opsviewbase=""
; The next value will be regenerated by nagconfgen
; Used for logo location
htmlshape="/images/logos/"
; Link to Opsview's icons
shape="/usr/local/nagios/share/images/logos/"

; Default values which get inherited to the maps and its objects
[defaults]
; default backend (id of the default backend)
backend="runtime"
; background color of maps
;backgroundcolor="#fff"
; Enable/Disable the context menu on map objects. With the context menu you are
; able to bind commands or links to your map objects
;contextmenu=1
; Choose the default context template
;headertemplate="default"
; Enable/Disable changing background color on state changes (Configured color is
; shown when summary state is PENDING, OK or UP)
;eventbackground=0
; Enable/Disable highlighting of the state changing object by adding a flashing
; border
;eventhighlight=1
; The duration of the event highlight in miliseconds (10 seconds by default)
;eventhighlightduration=10000
; The interval of the event highlight in miliseconds (0.5 seconds by default)
;eventhighlightinterval=500
; Enable/Disable the eventlog in the new javascript frontend. The eventlog keeps
; track of important actions and information
;eventlog=0
; Loglevel of the eventlog (available: debug, info, warning, critical)
;eventloglevel="info"
; Height of the eventlog when visible in px
;eventlogheight="75"
; Hide/Show the eventlog on page load
;eventloghidden="1"
; Enable/Disable scrolling to the icon which changed the state when the icon is
; out of the visible scope
;eventscroll=1
; Enable/Disable sound signals on state changes
;eventsound=1
; enable/disable header menu
;headermenu="1"
; header template
;headertemplate="default"
; enable/disable hover menu
;hovermenu=1
; hover template
;hovertemplate="default"
; hover menu open delay (seconds)
;hoverdelay=0
; show children in hover menus
;hoverchildsshow=1
; limit shown child objects to n
;hoverchildslimit="10"
; order method of children (desc: descending, asc: ascending)
;hoverchildsorder="asc"
; sort method of children (s: state, a: alphabetical)
;hoverchildssort="s"
; default icons
;icons="opsview_medium"
; recognize only hard states (not soft)
;onlyhardstates=0
; recognize service states in host/hostgroup objects
;recognizeservices=1
; show map in lists (dropdowns, index page, ...)
;showinlists=1
; target for the icon links
urltarget="_parent"
; URL template for host object links
;hosturl="[htmlcgi]/status.cgi?host=[host_name]"
; URL template for hostgroup object links
;hostgroupurl="[htmlcgi]/status.cgi?hostgroup=[hostgroup_name]"
; URL template for service object links
;serviceurl="[htmlcgi]/extinfo.cgi?type=2&host=[host_name]&service=[service_description]"
; URL template for servicegroup object links
;servicegroupurl="[htmlcgi]/status.cgi?servicegroup=[servicegroup_name]&style=detail"

; Options to configure the Overview page of NagVis
[index]
; Color of the overview background
;backgroundcolor=#fff
; Set number of map cells per row
;cellsperrow=4
; enable/disable header menu
;headermenu="1"
; header template
;headertemplate="default"
; Enable/Disable rotation listing
; Opsview patch - we disable it for now as you cannot configure rotations from the UI
showrotations=0

; Options for the Automap
[automap]
; Default URL parameters for links to the automap
;defaultparams="&maxLayers=2"
; Default root host (NagVis uses this if it can't detect it via NDO)
;defaultroot=""
; Path to the graphviz binaries (dot,neato,...); Only needed if not in ENV PATH
;graphvizpath="/usr/bin/"
; Show the automap in the lists (Map index and dropdown menu in header)
;showinlists=1

; Options for the WUI
[wui]
; Users which are allowed to change the NagVis configuration (comma separated list)
;allowedforconfig=EVERYONE
; auto update frequency
;autoupdatefreq=25
; map lock time (minutes)
;maplocktime=5

; Options for the new Javascript worker
[worker]
; The interval in seconds in which the worker will check for objects which need
; to be updated
;interval=10
; The maximum number of parameters used in ajax http requests
; Some intrusion detection/prevention systems have a problem with
; too many parameters in the url. Give 0 for no limit.
;requestmaxparams=0
; The maxium length of http request urls during ajax http requests
; Some intrusion detection/prevention systems have a problem with
; too long queries
requestmaxlength=3000
; The retention time of the states in the frontend in seconds. The state 
; information will be refreshed after this time
;updateobjectstates=30

; ----------------------------
; Backend definitions
; ----------------------------

; in this example the ID of the Backend is "ndomy_1" you can define another ID.
[backend_runtime]
; type of backend - MUST be set
;backendtype="ndomy"
; This value will be regenerated by nagconfgen
; hostname for NDO-db
dbhost="localhost"
; portname for NDO-db
;dbport=3306
; This value will be regenerated by nagconfgen
; database name for NDO-db
dbname="runtime"
; This value will be regenerated by nagconfgen
; username for NDO-db
dbuser="nagios"
; This value will be regenerated by nagconfgen
; password for NDO-db
dbpass="changeme"
; prefix for tables in NDO-db
;dbprefix="nagios_"
; instance name for tables in NDO-db
;dbinstancename="default"
; maximum delay of the NDO Database in seconds
;maxtimewithoutupdate=180
; path to the cgi-bin of this backend
htmlcgi="/cgi-bin"

; in this example the ID of the Backend is "ndo2fs_1" you can define another ID.
[backend_ndo2fs_1]
; type of backend - MUST be set
;backendtype="ndo2fs"
; Path to the ndo2fs var directory where the VOLATILE and PERSISTENT directories are
;path="/usr/local/ndo2fs/var"
; Name of the instance to get the data from
;instancename="default"
; maximum delay of the last status update in seconds
;maxtimewithoutupdate=180
; path to the cgi-bin of this backend
htmlcgi="/cgi-bin"

; in this example the ID of the Backend is "merlinmy_1" you can define another ID.
[backend_merlinmy_1]
; type of backend - MUST be set
;backendtype="merlinmy"
; hostname for Merlin db
dbhost="localhost"
; portname for Merlin db
;dbport=3306
; database name for Merlin db
dbname="runtime"
; username for Merlin db
dbuser="nagios"
; password for Merlin db
dbpass="changeme"
; maximum delay of the Merlin Database in seconds
;maxtimewithoutupdate=180
; path to the cgi-bin of this backend
htmlcgi="/cgi-bin"

; ----------------------------
; Rotation pool definitions
; ----------------------------

; in this example the browser switches between the maps demo and demo2 every 15
; seconds, the rotation is enabled by url: index.php?rotation=demo
[rotation_demopool]
; These steps are rotated. The "Demo2:" is a label which is being displayed in
; the index pages rotation list.
maps="demo,Demo2:demo2"
; rotation interval (seconds)
interval=15

; -------------------------
; EOF
; -------------------------
