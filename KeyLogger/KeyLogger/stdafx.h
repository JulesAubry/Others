// stdafx.h�: fichier Include pour les fichiers Include syst�me standard,
// ou les fichiers Include sp�cifiques aux projets qui sont utilis�s fr�quemment,
// et sont rarement modifi�s
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
// TODO: faites r�f�rence ici aux en-t�tes suppl�mentaires n�cessaires au programme
