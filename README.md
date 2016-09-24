# NAVEbook
A webpage designed to aid NAVE students

# Features
- Contains a timetable for every class, every time, and every day of the week
- Contains commonly needed images related to NAVE
- Contains a admin sistem to edit the timetable

# Summary

- [Setup](#Setup)
- [Dependencies](#Dependencies)
- [Recommendations](#Dependencies)


## Setup

Fist you will needed the nodejs in your local machine.

- For ubuntu, use the command:

```bash
  sudo apt-get install -y nodejs
```

- Windows users can download with the final link

	- [Windows Installer](https://nodejs.org/dist/v4.5.0/node-v4.5.0-x86.msi)

After that you can clone the repository, enter in the folder, download the dependencies...

```bash
git clone https://github.com/MatheusAvellar/nave-book && cd nave-book && npm install
```
and try run

```bash
DEBUG=my-application ./bin/www
```

# Dependencies

The dependencies are listed in package.json file, but you can see the modules right here.

```json
"express": "~4.0.0",
"static-favicon": "~1.0.0",
"morgan": "~1.0.0",
"cookie-parser": "~1.0.1",
"body-parser": "~1.0.0",
"debug": "~0.7.4",
"ejs": "~0.8.5"
```

# Recommendations

- Use the CamelCase naming convention in javascript
- Create alias for command commonly used