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
package Opsview::Schema::ApiAuditlogs;

use strict;
use warnings;

use base 'Opsview::DBIx::Class';

#use base 'DBIx::Class::Core';

=head1 NAME

Opsview::Schema::ApiAuditlogs

=cut

__PACKAGE__->load_components(qw/Core/);
__PACKAGE__->table( __PACKAGE__->opsviewdb . ".api_auditlogs" );

=head1 ACCESSORS

=head2 id

  data_type: INT
  default_value: undef
  is_auto_increment: 1
  is_nullable: 0
  size: 11

=head2 datetime

  data_type: DATETIME
  default_value: undef
  is_nullable: 0
  size: 19

=head2 username

  data_type: VARCHAR
  default_value: undef
  is_nullable: 0
  size: 128

=head2 text

  data_type: TEXT
  default_value: undef
  is_nullable: 0
  size: 65535

=cut

__PACKAGE__->add_columns(
    "id",
    {
        data_type         => "INT",
        default_value     => undef,
        is_auto_increment => 1,
        is_nullable       => 0,
        size              => 11,
    },
    "datetime",
    {
        data_type     => "DATETIME",
        default_value => undef,
        is_nullable   => 0,
        size          => 19,
    },
    "username",
    {
        data_type     => "VARCHAR",
        default_value => undef,
        is_nullable   => 0,
        size          => 128,
    },
    "text",
    {
        data_type     => "TEXT",
        default_value => undef,
        is_nullable   => 0,
        size          => 65535,
    },
);
__PACKAGE__->set_primary_key( "id" );

1;
