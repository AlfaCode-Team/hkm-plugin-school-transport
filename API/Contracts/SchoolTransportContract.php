<?php

declare(strict_types=1);

namespace Plugins\SchoolTransport\API\Contracts;

/**
 * Published contract for `school.transport`.
 *
 * School bus routes, trips, checkpoints, passengers, bus cards and boarding scans.
 *
 * Legacy source : drivers/ (bus_dash, bus_routes, bus_passengers, bus_cards, bus_scan), api/bus_scan.php
 * Legacy tables : bus_routes, bus_trips, bus_trip_checkpoints, bus_passengers, bus_scan_events
 *
 * Consumers declare `"requires": ["school.transport"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolTransportContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
