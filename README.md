# hkm-plugin-school-transport

> Solves **`school.transport`** · namespace **`Plugins\SchoolTransport\`** · on-demand GDA module
> Family: Elimu / school domain

School bus routes, trips, checkpoints, passengers, bus cards and boarding scans.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolTransportContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `drivers/ (bus_dash, bus_routes, bus_passengers, bus_cards, bus_scan), api/bus_scan.php` |
| Legacy tables | `bus_routes, bus_trips, bus_trip_checkpoints, bus_passengers, bus_scan_events` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `school.people`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.transport"] }
```

```php
$svc = $container->make(\Plugins\SchoolTransport\API\Contracts\SchoolTransportContract::class);
```

## Installing

```bash
hkm plugins enable SchoolTransport <project>
```
