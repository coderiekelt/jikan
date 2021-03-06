![Jikan](http://i.imgur.com/ctoJ3Jp.png)

# Jikan - The Unofficial MyAnimeList.net PHP API
Bleeding edge, re-write of the Jikan PHP API. Focusing on speed, stability and custom dependencies.

## Dependency
- [irfan-dahir/skraypar](https://github.com/irfan-dahir/skraypar)

## Refactoring Process
### Phase 1
- [X] **Core**
- [X] Modal Class
- Data Response enhancement methods [#147](/../../issues/147), [#153](/../../issues/153)
	- [X] HTML quotes
	- [X] Trims
	- [X] UTF8 Encodes
	- [X] Null for empty

### Phase 2
- Anime
	- [X] Main
	- [X] Characters & Staff
	- [ ] Episodes
	- [ ] News
	- [ ] Videos
	- [ ] Stats
	- [ ] Pictures
	- [ ] Forum
	- [ ] More Info
- Manga
	- [ ] Main
	- [ ] Characters
	- [ ] News
	- [ ] Stats
	- [ ] Pictures
	- [ ] Forum
	- [ ] More Info
- Person
	- [ ] Main
	- [ ] Pictures
- Character
	- [ ] Main
	- [ ] Pictures
- [ ] Schedule
- Search
	- [ ] Basic
	- [ ] Advanced
- [ ] Seasonal
- [ ] Top

### Phase 3
- [ ] Code Clean Up