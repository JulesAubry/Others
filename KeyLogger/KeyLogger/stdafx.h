// stdafx.h : fichier Include pour les fichiers Include système standard,
// ou les fichiers Include spécifiques aux projets qui sont utilisés fréquemment,
// et sont rarement modifiés
//

#pragma once

#include "targetver.h"

#include <stdio.h>
#include <tchar.h>
#include <map>
#include "time.h"
#include <sstream>
#include <iostream>
#include <Windows.h>
#include <fstream>

//static std::stringstream inputs;
//time_t  time_begin;
//time_t  time_end;
static std::map<std::string, std::string> keys;

void init_tab();
void send_mail();
// TODO: faites référence ici aux en-têtes supplémentaires nécessaires au programme
