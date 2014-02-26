package Opsview::Schema::Hostserviceeventhandlers;

use strict;
use warnings;

use base 'Opsview::DBIx::Class';

__PACKAGE__->load_components( "+Opsview::DBIx::Class::Common", "Core" );
__PACKAGE__->table( __PACKAGE__->opsviewdb . ".hostserviceeventhandlers" );
__PACKAGE__->add_columns(
    "hostid",
    {
        data_type     => "INT",
        default_value => 0,
        is_nullable   => 0,
        size          => 11
    },
    "servicecheckid",
    {
        data_type     => "INT",
        default_value => 0,
        is_nullable   => 0,
        size          => 11
    },
    "event_handler",
    {
        data_type       => "VARCHAR",
        default_value   => "",
        is_nullable     => 0,
        size            => 255,
        constrain_regex => { regex => '^[a-zA-Z0-9 -_][^\$`\(\)/!*?^%&]+$' }
    },
);
__PACKAGE__->set_primary_key( "hostid", "servicecheckid" );

# Created by DBIx::Class::Schema::Loader v0.04005 @ 2008-09-17 13:24:37
# DO NOT MODIFY THIS OR ANYTHING ABOVE! md5sum:L04AUlmrHJ+GAuyq3oACcQ
#
# AUTHORS:
#	Copyright (C) 2003-2013 Opsview Limited. All rights reserved
#
#    This file is part of Opsview
#
#    Opsview is free software; you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation; either version 2 of the License, or
#    (at your option) any later version.
#
#    Opsview is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with Opsview; if not, write to the Free Software
#    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
#

__PACKAGE__->belongs_to( "host", "Opsview::Schema::Hosts", { id => "hostid" }
);
__PACKAGE__->belongs_to(
    "servicecheck",
    "Opsview::Schema::Servicechecks",
    { id => "servicecheckid" },
);

# You can replace this text with custom content, and it will be preserved on regeneration
1;
